<?php

namespace App\Controllers;
use App\Models\ContactMessageModel;
use App\Models\Design3GetStartedModel;

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


 // =====================================================
    // GET STARTED
    // =====================================================

    public function getStarted()
    {
        return view('design3/get-started');
    }

public function getStartedSubmit()
{
    $model = new Design3GetStartedModel();

    $data = [
        'name'            => $this->request->getPost('name'),
        'email'           => $this->request->getPost('email'),
        'contact'         => $this->request->getPost('contact'),
        'city_country'    => $this->request->getPost('city_country'),
        'project_type'    => $this->request->getPost('project_type'),
        'budget'          => $this->request->getPost('budget'),
        'message'         => $this->request->getPost('message'),
        'phone_preferred' => $this->request->getPost('phone_preferred') ? 'Yes' : 'No'
    ];

    // Insert into database
    $model->insert($data);

    // Redirect back to Design 3 Get Started page
    return redirect()
        ->to('/design3/get-started')
        ->with(
            'success',
            'Thank you! Your project details have been submitted successfully.'
        );
}
}
