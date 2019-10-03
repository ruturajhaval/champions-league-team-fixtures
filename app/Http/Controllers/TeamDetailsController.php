<?php

namespace App\Http\Controllers;

use App\TeamDetails;
use Illuminate\Http\Request;

class TeamDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = TeamDetails::all()->toArray();
        $victoryTeams = array_slice($teams, 0, 7);
        $teamsData = $teams;
        $groups = array("Group A","Group B","Group C","Group D","Group E","Group F","Group G","Group H");
        $groupsArray = array();
        $teamArr = array();

        foreach ($groups as $value) {
            $groupsArray[$value] = array();
            while (count($groupsArray[$value]) < 4) {
                $teamsPosition = rand(0, count($teams)-1);
                // $teamsPosition = getArrayElementPosition($teams, $teamsPositionArray);
                $teamArr = $teams[$teamsPosition];
                
                if ($teamArr["tDomesticVictory"] == "yes") {
                    if (count($groupsArray[$value]) > 0 && $groupsArray[$value][0]["tDomesticVictory"] == "yes") {
                        continue;
                    } else {
                        array_unshift($groupsArray[$value], $teamArr);
                        // array_push($teamsPositionArray, $teamsPosition);
                        unset($teams[$teamsPosition]);
                        $teams = array_values($teams);
                    }
                } else {
                    if (in_array("yes", array_column($groupsArray[$value], "tDomesticVictory")) && count($groupsArray[$value]) <= 3) {
                        if (in_array($teamArr["tCountry"], array_column($groupsArray[$value], "tCountry"))) {
                            continue;
                        } else {
                            array_push($groupsArray[$value], $teamArr);
                            // array_push($teamsPositionArray, $teamsPosition);
                            unset($teams[$teamsPosition]);
                            $teams = array_values($teams);
                        }
                    } else {
                        continue;
                    }
                }
            }
        }

        $data["groupsFirstHalf"] = array_slice($groupsArray, 0, count($groupsArray)/2);
        $data["groupsSecondHalf"] = array_slice($groupsArray, count($groupsArray)/2);
        unset($data["teams"]);
        
        return view("team-fixtures", $data);
    }
}
