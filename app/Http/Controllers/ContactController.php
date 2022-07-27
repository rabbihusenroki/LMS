<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\ContactBanner;
use App\Models\Subscriber;
use App\Models\ContactForm;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function AllContact(){
        $contacts = Contact::latest()->get();
        return view('admin.contents.contact.contact', compact('contacts'));

    }
    
    public function AddContact(){

        return view('admin.contents.contact.create_contact');

    }
    public function StoreContact(Request $request){
        $validatedData = $request->validate([
    
            'email' => 'required',
            'address' => 'required|min:5',
            'phone' => 'required|max:11',
            ],
            [
            'email.required' => 'Please select valid mail',
            'address.required' => 'Address name field does not empty',
            'address.min' => 'Address length minimum 5',
            'phone.required' => 'Please select valid number',
            'phone.min' => 'Phone length maximum 11',
            ]);
            Contact::insert([
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'created_at' => Carbon::now()
                ]);
        return Redirect()->back()->with('success', 'Contact inserted successfully!');

    }

    public function EditContact($id){

        $contact_edit = Contact::find($id);
        return view('admin.contents.contact.edit_contact',compact('contact_edit'));
    
    }
    public function UpdateContact(Request $request, $id){

        $validatedData = $request->validate([

            'email' => 'required',
            'address' => 'required|min:5',
            'phone' => 'required|max:11',
            ],
            [
            'email.required' => 'Please select valid mail',
            'address.required' => 'Address name field does not empty',
            'address.min' => 'Address length minimum 5',
            'phone.required' => 'Please select valid number',
            'phone.min' => 'Phone length maximum 11',
            ]);

            Contact::find($id)->update([
        
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'created_at' => Carbon::now()
            ]);
            return Redirect()->route('all.contact')->with('success', 'Contact updated successfully!');
    }



    public function DeleteContact($id){

    Contact::find($id)->Delete();
    return Redirect()->back()->with('success','Contact Permanently Deleted!');
    }

    public function Contact(){

        $contacts = Contact::latest()->get();
        $contact_banners = ContactBanner::latest()->get();
        return view('layouts.pages.contact',compact('contacts','contact_banners'));
        }
        public function ContactSend(Request $request){
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required|max:11',
                'subject' => 'required|min:5',
                'message' => 'required|min:5',
                ],
                [
                'name.required' => 'Please select valid name',
                'email.required' => 'Please select valid mail',
                'subject.required' => 'Subject name field does not empty',
                'subject.min' => 'Subject length minimum 5',
                'message.required' => 'Message name field does not empty',
                'message.min' => 'Message length minimum 5',
                'phone.required' => 'Please select valid number',
                'phone.min' => 'Phone length maximum 11',
                ]);
            ContactForm::insert([

                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
                'created_at' => Carbon::now()
                ]);
                return Redirect()->back()->with('success','Your message send Successfully!');
            }

            public function AllMessage(){

                $messages = ContactForm::latest()->get();
                return view('admin.contents.message.message', compact('messages'));
                }

            public function DeleteMessage($id){

                ContactForm::find($id)->Delete();
                return Redirect()->back()->with('success','Contact message Permanently Deleted!');
                }

    


//Subscribers
public function AllSubscriber(){
    $subscribers = Subscriber::latest()->get();
    return view('admin.contents.subscriber.subscriber', compact('subscribers'));

}

public function StoreSubscriber(Request $request){
    $validatedData = $request->validate([
        'email' => 'required',
        ],
        [
        'email.required' => 'Please select valid mail',
        ]);
        Subscriber::insert([
            'email' => $request->email,
            'created_at' => Carbon::now()
            ]);
    return Redirect()->back()->with('success', 'Subscribe send successfully!');

}
public function DeleteSubscriber($id){

    Subscriber::find($id)->Delete();
    return Redirect()->back()->with('success','Subscriber mail Permanently Deleted!');
    }






    


}