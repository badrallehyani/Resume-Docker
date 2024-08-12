<?php
function Skills($info){
    $skills = $info["skills"];

    $skillsHTML = "";
    foreach($skills as $skill){
        $skillsHTML .= "<li><strong>".$skill."</strong><li>\n";
    }

    return "
    <section class=\"resume-section\" id=\"skills\">
        <div class=\"resume-section-content\">
            <h2 class=\"mb-5\">Skills</h2>

            <div class=\"subheading mb-3\">Programming Languages & Tools</div>
            <ul class=\"list-unstyled skills-list\">
                $skillsHTML
            </ul>
        </div>
    </section>
    ";
}
