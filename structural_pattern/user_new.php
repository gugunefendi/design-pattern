<?php
namespace StructuralPattern;

require_once "structural_pattern/user_old.php";

class UserNew {

    private $userOld;

    public function __construct(UserOld $userOld) {
        $this->userOld = $userOld;
    }

    public function getUser() {
        $userJson = $this->xmlToJson($this->userOld->getUser());
        return $userJson;
    }

    private function xmlToJson($data) {
        $user = simplexml_load_string($data);
        return json_encode($user);
    }

}