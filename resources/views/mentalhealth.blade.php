@extends('layouts.app')

@section('content')

<div id="mentalContainer">
    <div class="container d-flex" id="jumboContainer">
        <div class="jumbotron" id="mhJumbo">
            <h1 class="display-4">Mental Health Resources</h1>
            <h4 class="display-5">Everyone needs help from time to time</h3>
            <hr class="my-4">
            <p class="lead">Take a look at these resources we've gathered for finding help with your mental clarity and happiness.</p>
        </div>
    </div>
</div>


    <div class="cardDeck d-flex justify-content-around">
        <div class="card cardExtendo">
            <img src="/images/bullseye.png" class="card-img-top cardTopExtendo" alt="Anger and Irritability Management">
            <div class="card-body">
                <h5 class="card-title">Anger and Irritability Management</h5>
                <p class="card-text">New interactive skills building for anger and irritability developed by the VA.</p>
                <a href="http://www.veterantraining.va.gov/apps/aims/index.html" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/cigna_logo.png" class="card-img-top cardTopExtendo" alt="Cigna Stress Management Toolkit" id="cignaLogo">
            <div class="card-body">
                <h5 class="card-title">Cigna Stress Management Toolkit</h5>
                <p class="card-text">Stress is a fact of life. It’s your mind’s and body’s response to demanding situations or events. Not all stress is bad. It can energize you and help you perform at your best. But too much stress, or stress that lasts too long, can take a toll.  This link will connect with with podcasts and audio versions of mindfulness exercises to help relieve stress.</p>
                <a href="http://www.cigna.com" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/ComingHome.jpeg" class="card-img-top cardTopExtendo" alt="Coming Home Project">
            <div class="card-body">
                <h5 class="card-title">Coming Home Project</h5>
                <p class="card-text">Devoted to providing compassionate care, support and stress management tools for Iraq and Afghanistan veterans and their families, a range of free services: residential retreats; psychological counseling; education, training and consultation; self-care for service providers; and community forums, emotional, spiritual, relationship, and reintegration challenges faced by veterans and families before, during and after deployment.</p>
                <a href="http://www.cominghomeproject.net" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
    </div>

    <div class="cardDeck d-flex justify-content-around">
        <div class="card cardExtendo">
            <img src="/images/gaf.png" class="card-img-top cardTopExtendo" alt="Grace After Fire">
            <div class="card-body">
                <h5 class="card-title">Grace After Fire</h5>
                <p class="card-text">Grace After Fire is designed to serve women veterans from all eras and branches of service (currently 1.8M), and is preparing to meet the high numbers of women (approximately 14 percent of the armed services) currently serving. Treatment links and options are listed.</p>
                <a href="http://www.graceafterfire.org" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/h4v.jpeg" class="card-img-top cardTopExtendo" alt="Homecoming 4 Veterans">
            <div class="card-body">
                <h5 class="card-title">Homecoming 4 Veterans</h5>
                <p class="card-text">Stress is a fact of life. It’s your mind’s and body’s response to demanding situations or events. Not all stress is bad. It can energize you and help you perform at your best. But too much stress, or stress that lasts too long, can take a toll.  This link will connect with with podcasts and audio versions of mindfulness exercises to help relieve stress.</p>
                <a href="http://www.homecoming4veterans.org/" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/connectionLogo.png" class="card-img-top cardTopExtendo" alt="Make the Connection">
            <div class="card-body">
                <h5 class="card-title">Make the Connection</h5>
                <p class="card-text">Another new website launched by the VA that is easy to navigate and is loaded with some great information. It’s called Make the Connection and has some really helpful resources and information about invisible wounds of war and how to identify, get help and understand them better.</p>
                <a href="http://maketheconnection.net/" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
    </div>

    <div class="cardDeck d-flex justify-content-around">
        <div class="card cardExtendo">
            <img src="/images/nami.jpg" class="card-img-top cardTopExtendo" alt="National Alliance on Mental Illness">
            <div class="card-body">
                <h5 class="card-title">National Alliance on Mental Illness</h5>
                <p class="card-text">Specific information about Veterans and mental health related illnesses and information for resources for veterans and their families.</p>
                <a href="http://www.nami.org/veterans" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/nimh.jpeg" class="card-img-top cardTopExtendo" alt="National Institute of Mental Health">
            <div class="card-body">
                <h5 class="card-title">National Institute of Mental Health</h5>
                <p class="card-text">Scroll down to “Mental Health Topics” to get a description of mental health diagnosis and how to locate resources for assistance.</p>
                <a href="http://www.nimh.nih.gov/index.shtml" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/ptsd.png" class="card-img-top cardTopExtendo" alt="National Center for Post Traumatic Stress Disorder">
            <div class="card-body">
                <h5 class="card-title">National Center for Post Traumatic Stress Disorder</h5>
                <p class="card-text">Information on Post Traumatic Stress Disorder from the National Center for PTSD.</p>
                <a href="http://www.ptsd.va.gov" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
    </div>

    <div class="cardDeck d-flex justify-content-around">
        <div class="card cardExtendo">
            <img src="/images/mend.png" class="card-img-top cardTopExtendo" alt="Operation Mend">
            <div class="card-body">
                <h5 class="card-title">Operation Mend</h5>
                <p class="card-text">Participants in the program will receive the personalized care for which UCLA Operation Mend is known. All care, travel and accommodations are arranged for and provided at no cost to Operation Mend patients and their families. In addition, patients and family members will be picked up at the gate of the airplane upon arrival and transported to and from their hotel and all activities and appointments. Following the onsite three-week program, participants will take part in an additional three weeks of provider-facilitated peer-to-peer support via telehealth to continue refining skills and building community.</p>
                <a href="https://www.uclahealth.org/operationmend/intensive-treatment-program" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/oro.png" class="card-img-top cardTopExtendo" alt="Operation Reach Out">
            <div class="card-body">
                <h5 class="card-title">Operation Reach Out</h5>
                <p class="card-text">– FREE! Suicide Prevention Apps –</p>
                <p class="card-text">These apps are designed to encourage people to reach out for help when they are having suicidal thoughts, help those who are concerned about family members, spouses, or fellow service members who may be suicidal, provide a personal contact help center, provide activities to help people who are depressed stay connected to others.</p>
                <a href="http://www.4mca.com/suicide_prevention_app/" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/redcross.png" class="card-img-top cardTopExtendo" alt="Red Cross">
            <div class="card-body">
                <h5 class="card-title">Red Cross</h5>
                <p class="card-text">Go to “Getting Assistance” and click on “Military Families” to find out about the resources that are offered by the red cross with regard to counseling and other social service needs or call 1-877-272-7337.</p>
                <a href="http://www.redcross.org" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
    </div>

    <div class="cardDeck d-flex justify-content-around">
        <div class="card cardExtendo">
            <img src="/images/samhsa.png" class="card-img-top cardTopExtendo" alt="Substance Abuse and Mental Health Administration">
            <div class="card-body">
                <h5 class="card-title">Substance Abuse and Mental Health Administration</h5>
                <p class="card-text">The United States Department of Health and Human Services special link to mental health resources. Look in left hand menu under “treatment locators” to find community mental health resources near you.</p>
                <a href="https://www.samhsa.gov" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/span.png" class="card-img-top cardTopExtendo" alt="Suicide Prevention Action Network">
            <div class="card-body">
                <h5 class="card-title">Suicide Prevention Action Network</h5>
                <p class="card-text">– FREE! Suicide Prevention Tools –</p>
                <p class="card-text">A national suicide prevention organization that provides extensive information that may be helpful for veterans and their families. 1-800-273-TALK for 24/7 assistance.</p>
                <a href="http://www.spanusa.org" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/va.jpeg" class="card-img-top cardTopExtendo" alt="Suicide Information/Assistance">
            <div class="card-body">
                <h5 class="card-title">Suicide Information/Assistance</h5>
                <p class="card-text">VA Suicide Hotline and other mental Health support and information.</p>
                <a href="http://www.mentalhealth.va.gov/" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
    </div>

    <div class="cardDeck d-flex justify-content-around">
        <div class="card cardExtendo">
            <img src="/images/vc.png" class="card-img-top cardTopExtendo" alt="Vet Centers">
            <div class="card-body">
                <h5 class="card-title">Vet Centers</h5>
                <p class="card-text">Vet Centers offer a wide range of services to help you make a successful transition from military to civilian life. Services include -individual & group counseling, marital and family counseling, bereavement counseling, medical & benefits referrals, employment counseling. To locate the Vet Center nearest you, click on “find a vet center” in the right hand menu.</p>
                <a href="https://www.vetcenter.va.gov" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/warriorsheart.png" class="card-img-top cardTopExtendo" alt="Warriors Heart">
            <div class="card-body">
                <h5 class="card-title">Warriors Heart</h5>
                <p class="card-text">Warriors Heart is a privately funded treatment center located in San Antonio, where we only treat active military, veterans, firefighters, police, EMTs, and active members from across the United States that belong to organizations that protect and serve the citizens of the United States.</p>
                <a href="https://www.warriorsheart.com/" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/zocdoc.png" class="card-img-top cardTopExtendo" alt="Zoc Doc Therapy Counselors">
            <div class="card-body">
                <h5 class="card-title">Zoc Doc Therapy Counselors</h5>
                <p class="card-text">Need to make a therapist / counselor appointment this week? Use Zocdoc to find therapists/counselors near you who take your insurance. It’s simple, secure and free.</p>
                <a href="http://www.zocdoc.com/therapist-counselors" target="_blank" class="btn btn-primary">Visit</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <img src="{{ URL::asset('/images/mentalpriority.jpeg') }}" alt="mental-health" id="mentalHero">
    </div>
@endsection
