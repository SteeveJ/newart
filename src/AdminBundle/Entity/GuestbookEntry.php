<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuestbookEntry
 *
 * @ORM\Table(name="guestbook_entry", indexes={@ORM\Index(name="guestbook_entry_FI_1", columns={"user_id"}), @ORM\Index(name="guestbook_entry_FI_2", columns={"signer_id"})})
 * @ORM\Entity
 */
class GuestbookEntry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="signer_id", type="integer", nullable=false)
     */
    private $signerId;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=120, nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=120, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=120, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}
