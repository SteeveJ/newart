<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SfGuardPermission
 *
 * @ORM\Table(name="sf_guard_permission", uniqueConstraints={@ORM\UniqueConstraint(name="sf_guard_permission_U_1", columns={"name"})})
 * @ORM\Entity
 */
class SfGuardPermission
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


}
