<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Featurable
 *
 * @ORM\Table(name="featurable")
 * @ORM\Entity
 */
class Featurable
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
     * @var \DateTime
     *
     * @ORM\Column(name="featuring_date", type="datetime", nullable=true)
     */
    private $featuringDate;

    /**
     * @var string
     *
     * @ORM\Column(name="descendant_class", type="string", length=100, nullable=true)
     */
    private $descendantClass;


}
