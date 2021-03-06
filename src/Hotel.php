<?php

namespace Julian\M6ViewaLasVegas;

class Hotel
{
    protected $header;
    protected $img;
    protected $description;


    public function __construct($header, $img, $description)
    {
        $this->header = $header;
        $this->description = $description;
        $this->img = $img;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Get the value of header
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function getContent(){
        return <<<CONTENT
        <div class="hotel">
        <h1>$this->header</h1>
        <img
          src="$this->img"
        />
        <p>
          $this->description
        </p>
      </div>
CONTENT;
    }
}
