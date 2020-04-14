<?php
    namespace App\Entity;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="users")
     */
    class User
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue
         */
        protected $id;

        /**
         * @ORM\Column(type="string")
         */
        protected $firstName;

        /**
         * @ORM\Column(type="string")
         */
        protected $lastName;

        /**
         * @ORM\Column(type="string")
         */
        protected $username;

        /**
         * @return string
         */
        public function getFirstName()
        {
            return $this->firstName;
        }

        /**
         * @param string $firstName
         */
        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }

        /**
         * @return string
         */
        public function getLastName()
        {
            return $this->lastName;
        }

        /**
         * @param string $lastName
         */
        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

        /**
         * @return string
         */
        public function getUsername()
        {
            return $this->username;
        }

        /**
         * @param string $username
         */
        public function setUsername($username)
        {
            $this->username = $username;
        }
    }