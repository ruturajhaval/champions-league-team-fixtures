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

        $groups = array("Group A","Group B","Group C","Group D","Group E","Group F","Group G","Group H");
        $groupsArray = array();
        $teamArr = array();

        for ($i = 0; $i < count($groups); $i++) {
            $groupName = $groups[$i];
            $groupsArray[$groupName] = array();

            while (count($groupsArray[$groupName]) < 4) {
                echo count($teams)."\t";
                $teamsPosition = rand(0, count($teams)-1);
                $teamArr = $teams[$teamsPosition];
                $groupCount = count($groupsArray[$groupName]);
                
                if ($groupCount == 0) {
                    array_push($groupsArray[$groupName], $teamArr);
                    unset($teams[$teamsPosition]);
                    $teams = array_values($teams);
                } else {
                    $tCountryArr = array_column($groupsArray[$groupName], "tCountry");
                    if ($teamArr["tDomesticVictory"] == "yes") {
                        if ($groupsArray[$groupName][0]["tDomesticVictory"] == "yes") {
                            continue;
                        } else {
                            array_unshift($groupsArray[$groupName], $teamArr);
                            unset($teams[$teamsPosition]);
                            $teams = array_values($teams);
                        }
                    } else {
                        if (in_array($teamArr["tCountry"], $tCountryArr)) {
                            continue;
                        } else {
                            if ($groupsArray[$groupName][0]["tDomesticVictory"] == 'yes') {
                                array_push($groupsArray[$groupName], $teamArr);
                                unset($teams[$teamsPosition]);
                                $teams = array_values($teams);
                            } elseif ($groupCount <= 2) {
                                array_push($groupsArray[$groupName], $teamArr);
                                unset($teams[$teamsPosition]);
                                $teams = array_values($teams);
                            }
                        }
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
