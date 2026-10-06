<?php

namespace App\Controllers;
use App\Models\ContactMessageModel;

class Design3 extends BaseController
{
    public function index()
    {
        return view('design3/home');
    }


    // ABOUT
    public function about()
    {
        return view('design3/about');
    }


    // SERVICES
    public function services()
    {
        return view('design3/services');
    }


    // SERVICE DETAIL
    public function serviceDetail($slug)
    {
        return view('design3/service_detail', [
            'slug' => $slug
        ]);
    }


    // SOLUTIONS
    public function solutions()
    {
        return view('design3/solutions');
    }


    // SOLUTION DETAIL
    public function solutionDetail($slug)
    {
        return view('design3/solution_detail', [
            'slug' => $slug
        ]);
    }


    // CAREERS
    public function careers()
    {
        return view('design3/careers');
    }


    // CONTACT
    public function contact()
    {
        return view('design3/contact');
    }


   // CONTACT FORM SUBMIT
public function contactSubmit()
{
    $contactModel = new ContactMessageModel();

    // Indian Time (IST)
    date_default_timezone_set('Asia/Kolkata');

    $data = [
        'name'       => $this->request->getPost('name'),
        'email'      => $this->request->getPost('email'),
        'phone'      => $this->request->getPost('phone'),
        'message'    => $this->request->getPost('message'),
        'created_at' => date('Y-m-d H:i:s'),
    ];

    $contactModel->insert($data);

    return redirect()
        ->to(base_url('design3/contact'))
        ->with(
            'success',
            'Your message has been submitted successfully.'
        );
}

public function login()
{
    return view('design3/login');
}
}