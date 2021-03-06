<?php
namespace Planck\Application\State;



use Planck\Application\Application;
use Planck\Application\State;
use Planck\State\Dimension;

class Execution extends State
{

    public function __construct(Application $application)
    {
        parent::__construct($application);

        $this->addDimension(
            new Dimension('forbidden')
        );

        $this->addDimension(
            new Dimension('notFound')
        );

        $this->addDimension(
            new Dimension('ok')
        );
    }

    public function ok($value = null)
    {
        if($value !== null) {
            $this->setValue('ok', $value);
            return $this;
        }
        else {
            return $this->getValue('ok');
        }
    }

    public function notFound($value = null)
    {
        if($value !== null) {
            $this->setValue('notFound', $value);
            return $this;
        }
        else {
            return $this->getValue('notFound');
        }
    }



    public function forbidden($value = null)
    {
        if($value !== null) {
            $this->setValue('forbidden', $value);
            return $this;
        }
        else {
            return $this->getValue('forbidden');
        }
    }




}