<?php
    //Generates the project cards
    function generateProjectCards(array $projects) {
        $result = "";
        foreach ($projects as $p) {
            $result .= "<div class='projectCard anim' style='--delay: .1s'>";
            $result .= "<div class='textContainer'>";
            if (isset($p->hostlink)) {
                $result .= "<div class='projectCardTitle'><a class='projectCardTitleLink' href='$p->hostlink' target='_blank'>$p->name</a></div>";
            } else {
                $result .= "<div class='projectCardTitle'>$p->name</div>";
            }
            $result .= "<div class='description-text'>$p->description</div>";
            $result .= "<div class='linksContainer'>";
            if (isset($p->hostlink)) {
                $result .= "<a href='$p->hostlink' target='_blank'><span class='links fab fa-edge'></span></a>";
            }
            if (isset($p->githublink)) {
                $result .= "<a href='$p->githublink' target='_blank'><span class='links fab fa-github-square'></span></a>";
            }
            $result .= "</div></div><img class='projectImage' src='$p->imagepath'></div>";
        }
        return $result;
    }

    //Generate skills cards
    function generateSkillsCards(array $skills) {
        $result = "";
        foreach ($skills as $s) {
            $result .= "<div class='skillInfo anim'>";
            $result .= "<span class='skillTitle'>$s->name</span>";
            $result .= "<div>";
            for ($i=0; $i < $s->proficiency; $i++) { 
                $result .= "<div class='dot'></div>";
            }
            $count = 5 - $s->proficiency;
            for ($i=0; $i < $count; $i++) { 
                $result .= "<div class='dot dotEmpty'></div>";
            }
            $result .= "</div></div>";
        }
        return $result;
    }
?>