<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SfGuardUserPermission
 *
 * @ORM\Table(name="sf_guard_user_permission", indexes={@ORM\Index(name="sf_guard_user_permission_FI_2", columns={"permission_id"})})
 * @ORM\Entity
 */
class SfGuardUserPermission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="permission_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $permissionId;


}
