<?php

function Projects($info){
    $projects = $info["projects"];

    $projectsHTML = "";

    foreach ($projects as $project) {
        $title = $project['title'];
        $tech = $project['tech'];
        $desc = $project['desc'];

        $tweet = array_key_exists('tweet', $project)? $project['tweet']: null;
        $source = array_key_exists('source', $project)? $project['source']: null;

        $projectsHTML .= "<div class=\"flex-grow-1\">";

        $projectsHTML .= "<h3 class=\"mb-0\">$title</h3>";
        $projectsHTML .= "<div><strong>$desc</strong></div>";
        $projectsHTML .= "<p>Made With $tech</p>";

        if(isset($tweet)){
            $projectsHTML .= "<a target=\"_blank\" href=$tweet class=\"m-1\">tweet</a>";
        }
        if(isset($source)){
            $projectsHTML .= "<a target=\"_blank\" href=$source class=\"m-1\">source</a>";
        }

        $projectsHTML .= "</div>";

        $projectsHTML .= "\n";
        
    }

    return "
    <section class=\"resume-section\" id=\"projects\">
        <div class=\"resume-section-content\">
            <h2 class=\"mb-5\">Projects</h2>

            <div class=\"d-flex flex-column gap-3 justify-content-between\">
                $projectsHTML
            </div>
        </div>
    </section>
    ";
}