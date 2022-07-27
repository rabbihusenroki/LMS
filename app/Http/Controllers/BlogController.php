<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogBanner;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
    public function AllBlog(){
        $blogs = Blog::latest()->get();
        return view('admin.contents.blog.blog', compact('blogs'));
    }
    public function AddBlog(){
        return view('admin.contents.blog.create_blog');
    }


    public function StoreBlog(Request $request){
    
        $validatedData = $request->validate([
    
        'title' => 'required|min:5',
        'blog_description' => 'required|min:5',
        'image' => 'required|mimes:jpg,jpeg,png',
        ],
        [
        'title.required' => 'Post name field does not empty',
        'blog_description.required' => 'Post Description field does not empty',
        'image.mimes' => 'Image file format must be JPEG,JPG,PNG',
        'image.required' => 'Please choose post image'
    
        ]);
    
        $blog_image = $request->file('image');
        $image_generate = hexdec(uniqid());
        $image_extension = strtolower($blog_image->getClientOriginalExtension());
        $image_name = $image_generate.'.'.$image_extension;
        $image_upload = 'images/blog/';
        $image = $image_upload.$image_name;
        $blog_image->move($image_upload,$image_name);
    
        Blog::insert([
    
        'title' => $request->title,
        'blog_description' => $request->blog_description,
        'author' => Auth::user()->id,
        'image' => $image,
        'created_at' => Carbon::now()
    
    
        ]);
        return Redirect()->back()->with('success', 'Post inserted successfully!');
        }

        public function EditBlog($id){

            $blog_edit = Blog::find($id);
            return view('admin.contents.blog.blog_edit',compact('blog_edit'));
        
        }
        public function UpdateBlog(Request $request, $id){

            $validatedData = $request->validate([

                'title' => 'required|max:255',
                ],
                [
                'title.required' => 'Post name field does not empty',
            
                ]);
                $old_image = $request->old_image;
                $blog_image = $request->file('image');
                if($blog_image){

                $image_generate = hexdec(uniqid());
                $image_extension = strtolower($blog_image->getClientOriginalExtension());
                $image_name = $image_generate.'.'.$image_extension;
                $image_upload = 'images/blog/';
                $image = $image_upload.$image_name;
                $blog_image->move($image_upload,$image_name);
                unlink($old_image);
                Blog::find($id)->update([
            
                'title' => $request->title,
                'blog_description' => $request->blog_description,
                'author' => Auth::user()->id,
                'image' => $image,
                'created_at' => Carbon::now(),
                ]);
                return Redirect()->route('all.blog')->with('success', 'Post updated successfully!');



                }else{

                    Blog::find($id)->update([
            
                    'title' => $request->title,
                    'blog_description' => $request->blog_description,
                    'author' => Auth::user()->id,
                    'created_at' => Carbon::now(),
                    ]);
                        return Redirect()->route('all.blog')->with('success', 'Post updated successfully!');
        

                }
        }



        public function DeleteBlog($id){

        $image = Blog::find($id);
        $old_image = $image->image;
        unlink($old_image);
        Blog::find($id)->Delete();
        return Redirect()->back()->with('success','Post Permanently Deleted!');
        }

        public function AllPost(){

        // $blogs = DB::table('blogs')
        // ->join('users','blogs.author','users.id')
        // ->select('blogs.*','users.name')
        // ->latest()->paginate(9);
        $blogs = Blog::latest()->paginate(6);
        $banners = Banner::latest()->get();
        $blog_banners = BlogBanner::latest()->get();
        return view('layouts.pages.blog',compact('blogs','banners','blog_banners'));
        
        }
        public function SinglePost($id){

            $single = Blog::find($id);
            $blog_banners = BlogBanner::latest()->get();
            return view('layouts.pages.blog_single',compact('single','blog_banners'));
            }
}
