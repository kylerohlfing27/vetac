@extends('layouts.app')

@section('content')
<div class="container d-flex" id="jumboContainer">
    <div class="jumbotron" id="mhJumbo">
        <h1 class="display-4">Mental Health Resources</h1>
        <h4 class="display-5">Everyone needs help from time to time</h3>
        <hr class="my-4">
        <p class="lead">Take a look at these resources we've gathered for finding help with your mental clarity and happiness.</p>
    </div>
</div>

    <div class="cardDeck d-flex justify-content-around">
        <div class="card cardExtendo">
            <img src="/images/bullseye.png" class="card-img-top cardTopExtendo" alt="Anger and Irritability Management">
            <div class="card-body">
                <h5 class="card-title">Anger and Irritability Management</h5>
                <p class="card-text">New interactive skills building for anger and irritability developed by the VA.</p>
                <a href="http://www.veterantraining.va.gov/apps/aims/index.html" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/cigna_logo.png" class="card-img-top cardTopExtendo" alt="Cigna Stress Management Toolkit" id="cignaLogo">
            <div class="card-body">
                <h5 class="card-title">Cigna Stress Management Toolkit</h5>
                <p class="card-text">Stress is a fact of life. It’s your mind’s and body’s response to demanding situations or events. Not all stress is bad. It can energize you and help you perform at your best. But too much stress, or stress that lasts too long, can take a toll.  This link will connect with with podcasts and audio versions of mindfulness exercises to help relieve stress.</p>
                <a href="http://www.cigna.com" class="btn btn-primary">Visit</a>
            </div>
        </div>
        <div class="card cardExtendo">
            <img src="/images/ComingHome.jpeg" class="card-img-top cardTopExtendo" alt="Coming Home Project">
            <div class="card-body">
                <h5 class="card-title">Coming Home Project</h5>
                <p class="card-text">Devoted to providing compassionate care, support and stress management tools for Iraq and Afghanistan veterans and their families, a range of free services: residential retreats; psychological counseling; education, training and consultation; self-care for service providers; and community forums, emotional, spiritual, relationship, and reintegration challenges faced by veterans and families before, during and after deployment.</p>
                <a href="http://www.cominghomeproject.net" class="btn btn-primary">Visit</a>
            </div>
        </div>
    </div>

    <div class="container">
        </p><p> 4.) Grace After Fire –www.graceafterfire.org.  Grace After Fire is designed to serve women veterans from all eras and branches of service (currently 1.8M), and is preparing to meet the high numbers of women (approximately 14 percent of the armed services) currently serving. Treatment links and options are listed.
        </p><p>  5.) Homecoming 4 Veterans – http://www.homecoming4veterans.org/ This site offers a list of biofeedback practitioners who are willing to offer FREE biofeedback to OEF/OIF veterans for a minimum of 20 sessions.  Click on “find a clinician” to access help in your area.
        </p><p>  6.)  Make the Connection – http://maketheconnection.net/ Another new website launched by the VA that is easy to navigate and is loaded with some great information…we like it because it has a lot of similarity to ours:-) It’s called Make the Connection and has some really helpful resources and information about invisible wounds of war and how to identify, get help and understand them better.
        </p><p>   7.)  National Alliance on Mental Illness – www.nami.org/veterans.  Specific information about Veterans and mental health related illnesses and information for resources for veterans and their families.
        </p><p>  8.) National Institute of Mental Health – http://www.nimh.nih.gov/index.shtml Scroll down to “Mental Health Topics” to get a description of mental health diagnosis and how to locate resources for assistance.
        </p><p>  9.) National Center for Post Traumatic Stress Disorder – www.ptsd.va.gov.  Information on PTSD from the National Center for PTSD.
        </p><p> 10.)  Operation Mend https://www.uclahealth.org/operationmend/intensive-treatment-program Participants in the program will receive the personalized care for which UCLA Operation Mend is known. All care, travel and accommodations are arranged for and provided at no cost to Operation Mend patients and their families. In addition, patients and family members will be picked up at the gate of the airplane upon arrival and transported to and from their hotel and all activities and appointments. Following the onsite three-week program, participants will take part in an additional three weeks of provider-facilitated peer-to-peer support via telehealth to continue refining skills and building community.
        </p><p> 11.) Operation Reach Out – FREE! Suicide Prevention Apps – http://www.4mca.com/suicide_prevention_app/
                These apps are designed to encourage people to reach out for help when they are having suicidal thoughts, help those who are concerned about family members, spouses, or fellow service members who may be suicidal, provide a personal contact help center, provide activities to help people who are depressed stay connected to others.
        </p><p>  12.) Red Cross –www.redcross.org Go to “Getting Assistance” and click on “Military Families” to find out about the resources that are offered by the red cross with regard to counseling and other social service needs or call 1-877-272-7337.
        </p><p>  13.) Substance Abuse and Mental Health Administration –www.samhsa.gov.  The United States Department of Health and Human Services special link to mental health resources. Look in left hand menu under “treatment locators” to find community mental health resources near you.
        </p><p>  14.) Suicide Prevention Action Network – www.spanusa.org.  A national suicide prevention organization that provides extensive information that may be helpful for veterans and their families. 1-800-273-TALK for 24/7 assistance.
        </p><p>  15.) Suicide Information/Assistance http://www.mentalhealth.va.gov/.  VA Suicide Hotline and other mental Health support and information.
        </p><p>  16.) Vet Centers –www.vetcenter.va.gov. Vet Centers offer a wide range of services to help you make a successful transition from military to civilian life. Services include -individual & group counseling, marital and family counseling, bereavement counseling, medical & benefits referrals, employment counseling. To locate the Vet Center nearest you, click on “find a vet center” in the right hand menu.
        </p><p>  17.) Warriors Heart –  https://www.warriorsheart.com/ Warriors Heart is a privately funded treatment center located in San Antonio, where we only treat active military, veterans, firefighters, police, EMTs, and active members from across the United States that belong to organizations that protect and serve the citizens of the United States
        </p><p>  18.) Zoc Doc Therapy Counselors – http://www.zocdoc.com/therapist-counselors </p>
    </div>
@endsection
