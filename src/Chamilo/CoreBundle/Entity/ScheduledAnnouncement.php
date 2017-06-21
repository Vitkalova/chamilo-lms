<?php
/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScheduledAnnouncement
 *
 * @ORM\Table(name="scheduled_announcements")
 * @ORM\Entity
 */
class ScheduledAnnouncement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false, unique=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", unique=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="sent", type="boolean")
     */
    private $sent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_id", type="int", nullable=false)
     */
    private $sessionId;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getSubject();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ScheduledAnnouncement
     */
    public function setId(int $id): ScheduledAnnouncement
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return ScheduledAnnouncement
     */
    public function setSubject(string $subject): ScheduledAnnouncement
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ScheduledAnnouncement
     */
    public function setMessage(string $message): ScheduledAnnouncement
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param int $date
     * @return ScheduledAnnouncement
     */
    public function setDate(int $date): ScheduledAnnouncement
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return int
     */
    public function getSent(): int
    {
        return $this->sent;
    }

    /**
     * @param int $sent
     * @return ScheduledAnnouncement
     */
    public function setSent(int $sent): ScheduledAnnouncement
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSessionId(): \DateTime
    {
        return $this->sessionId;
    }

    /**
     * @param \DateTime $sessionId
     * @return ScheduledAnnouncement
     */
    public function setSessionId(\DateTime $sessionId): ScheduledAnnouncement
    {
        $this->sessionId = $sessionId;

        return $this;
    }
}
