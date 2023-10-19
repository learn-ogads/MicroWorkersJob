<?php

function checkVariables() {
    if (!isset($_GET["keyword"]) || empty(trim($_GET["keyword"]))) {
        echo "The keyword was not provided!";
        die();
    }

    if (!isset($_GET["videoThumbnail"]) || empty(trim($_GET["videoThumbnail"]))) {
        echo "The video thumbnail was not provided!";
        die();
    }

    if (!filter_var($_GET["videoThumbnail"], FILTER_VALIDATE_URL)) {
        echo "The video thumbnail is not a valid URL";
        die();
    }

    if (!isset($_GET["channel"]) || empty(trim($_GET["channel"]))) {
        echo "The channel was not provided!";
        die();
    }

    return [
        "keyword" => trim($_GET["keyword"]),
        "videoThumbnail" => trim($_GET["videoThumbnail"]),
        "channel" => trim($_GET["channel"])
    ];
}