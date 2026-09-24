<?php

namespace App\Controllers;

use App\Models\ContactMessageModel;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact/index', [
            'title' => 'Contact Us | AmeriPro Solutions'
        ]);
    }


    public function submit()
    {
        $contactModel = new ContactMessageModel();

        $name = trim($this->request->getPost('name'));
        $email = trim($this->request->getPost('email'));
        $phone = trim($this->request->getPost('phone'));
        $message = trim($this->request->getPost('message'));


        // Validate required fields

        if ($name === '' || $email === '' || $message === '') {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Please fill in all required fields.');

        }


        // Validate email

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Please enter a valid email address.');

        }


        // Save contact message

        $contactModel->insert([
            'name'       => $name,
            'email'      => $email,
            'phone'      => $phone,
            'message'    => $message,
            'created_at' => date('Y-m-d H:i:s')
        ]);


        // Redirect after successful submission

        return redirect()
            ->to('/contact')
            ->with('success', 'Thank you! Your message has been sent successfully.');
    }
}