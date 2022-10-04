<?php

declare(strict_types=1);

use App\Calculator;
use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private Calculator $calculator;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->calculator = new Calculator;
    }

    /**
     * @Given ввести число :arg1
     */
    public function vvestiChislo(int $arg1)
    {
        $this->calculator->input($arg1);
    }

    /**
     * @When прибавить :arg1
     */
    public function pribavit(int $arg1)
    {
        $this->calculator->add($arg1);
    }

    /**
     * @Then результат :arg1
     */
    public function rezultat(int $arg1)
    {
        Assert::assertTrue($arg1 === $this->calculator->result());
    }

    /**
     * @When вычесть :arg1
     */
    public function vychest(int $arg1)
    {
        $this->calculator->sub($arg1);
    }

    /**
     * @When умножить на :arg1
     */
    public function umnozhitNa(int $arg1)
    {
        $this->calculator->multiple($arg1);
    }

    /**
     * @When разделить на :arg1
     */
    public function razdelitNa(int $arg1)
    {
        $this->calculator->divide($arg1);
    }
}
