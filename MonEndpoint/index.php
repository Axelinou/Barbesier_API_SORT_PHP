<?php

require("../security/SecLib.php");
require("../MonEndpoint.php");


class index {

    static function CallMyEndpoint() {
        monEndpoint::Routing();
    }

}

index::CallMyEndpoint();



