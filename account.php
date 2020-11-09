<?php
    interface Account {
        public function register ($pdo);
        public function login($pdo);
        public function changePassword($pdo);
        public function logout ($pdo);
        public function fetchData ($pdo);
        public function updateData ($pdo);
    }
?>