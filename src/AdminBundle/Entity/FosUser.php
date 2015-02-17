<?php


use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface as EncoderAwareInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * FosUser
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class FosUser implements EncoderAwareInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /** @ORM\Column(type="string", length=255) */
    protected $algorithm = 'sha512';

    public function getEncoderName() {
        return $this->algorithm == 'sha1' ? 'legacy' : 'default';
    }
    public function setSalt($salt) {
        $this->salt = $salt;
    }
}
