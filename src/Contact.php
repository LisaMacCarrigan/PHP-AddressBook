<?php
    class Contact
    {
        private $first_name;
        private $last_name;
        private $phone;
        private $address;

        function __construct($first_name, $last_name, $phone, $address)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->phone = $phone;
            $this->address = $address;
        }

        function setFirstName ($new_first_name)
        {
            $this->first_name = (string) $new_first_name;
        }

        function getFirstName()
        {
            return $this->first_name;
        }

        function setLastName ($new_last_name)
        {
            $this->last_name = (string) $new_last_name;
        }

        function getLastName ()
        {
            return $this->last_name;
        }

    }

?>
