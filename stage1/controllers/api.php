<?php

require 'config.php';
require '../Validator.php';
$slack = trim($_GET['slack_name']);
$track = trim($_GET['track']);

if (!Validator::entry($slack)) {
    abort("Slack name is required", 400);
}
;
if (!Validator::entry($track)) {
    abort("Track is required", 400);
};

$currentDay = date('l');
$currentTime = gmdate('y-m-d H:m:s');
$repoUrl = "https://github.com/CuriousHack/HNGxInternship";
$statusCode = 200;

$param = json_encode(
    [
        "slack_name" => "$slack",
        "current_day" => "$currentDay",
        "utc_time" => "$currentTime",
        "track" => "$track",
        "github_file_url" => "",
        "github_repo_url" => "$repoUrl",
        "status_code" => "$statusCode",
    ]
);
require 'views/api.view.php';
