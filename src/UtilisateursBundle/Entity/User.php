<?php


  	namespace UtilisateursBundle\Entity;

    use FOS\UserBundle\Model\User as BaseUser;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="fos_user")
     */
    class User extends BaseUser
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @return mixed
         */
        public function getNiveau()
        {
            return $this->niveau;
        }

        /**
         * @param mixed $niveau
         */
        public function setNiveau($niveau)
        {
            $this->niveau = $niveau;
        }



        /**
         * @ORM\OneToMany(targetEntity="niveau", mappedBy="User")
         */

        public $niveau;

        public function __construct()
        {
            parent::__construct();
            // your own logic
        }
    }
