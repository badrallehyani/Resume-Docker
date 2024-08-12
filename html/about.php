<?php



function About($info){
    $firstName = $info["first_name"];
    $lastName = $info["last_name"];
    
    $phoneNumber = $info["phone_number"];
    $email = $info["email"];
    $description = $info["description"];
    
    $linkedIn = $info["linkedIn"];
    $github = $info["github"];
    $twitter = $info["twitter"];
    
    return "
    <section class=\"resume-section\" id=\"about\">
        <div class=\"resume-section-content\">
            <h1 class=\"mb-0\">
                $firstName $lastName
                <!-- <span class=\"text-primary\">$lastName</span> -->
            </h1>
            <div class=\"subheading mb-5\">
                $phoneNumber · 
                <a href=\"mailto:$email\">$email</a>
            </div>
            <p class=\"lead mb-5\">$description</p>
            <div class=\"social-icons\">
                <!-- <a class=\"social-icon\" target=\"_blank\" href=\"$linkedIn\"><i class=\"fab fa-linkedin-in\"></i></a> -->
                <a class=\"social-icon\" target=\"_blank\" href=\"$github\"><i class=\"fab fa-github\"></i></a>
                <a class=\"social-icon\" target=\"_blank\" href=\"$twitter\"><i class=\"fab fa-twitter\"></i></a>
            </div>
        </div>
    </section>
    ";
}