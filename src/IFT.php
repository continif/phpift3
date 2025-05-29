<?php
/**
 * Class IFT
 *
 * The core class of the PhpIFT³ library that implements the "If This Then That" paradigm.
 */
class IFT {
    private $chains = [];

    /**
     * Defines a new chain of operations.
     *
     * @param string $name The name of the chain.
     */
    public function chain($name) {
        $this->chains[$name] = [
            'if' => null,
            'then' => null
        ];
    }

    /**
     * Defines the return of a function or a class method to be checked.
     *
     * @param string $chain_name The name of the chain.
     * @param callable $function The function or class method to be checked.
     * @param array $parameters The parameters to pass to the function.
     */
    public function ifThis($chain_name, $function, $parameters) {
        if (isset($this->chains[$chain_name])) {
            $this->chains[$chain_name]['if'] = [
                'function' => $function,
                'parameters' => $parameters
            ];
        }
    }

    /**
     * Runs a function or class method using the parameters passed.
     *
     * @param string $chain_name The name of the chain.
     * @param callable $function The function or class method to run.
     * @param array $parameters The parameters to pass to the function.
     */
    public function thanThat($chain_name, $function, $parameters) {
        if (isset($this->chains[$chain_name])) {
            $this->chains[$chain_name]['then'] = [
                'function' => $function,
                'parameters' => $parameters
            ];
        }
    }

    /**
     * Runs the ifThis of the corresponding chain_name and, if it returns true, runs thanThat.
     *
     * @param string $chain_name The name of the chain to run.
     * @return mixed The result of the thanThat function if the ifThis returns true, otherwise false.
     */
    public function run($chain_name) {
        if (isset($this->chains[$chain_name])) {
            $if = $this->chains[$chain_name]['if'];
            $then = $this->chains[$chain_name]['then'];

            if ($if && is_callable($if['function'])) {
                $ifResult = call_user_func_array($if['function'], $if['parameters']);
                if ($ifResult) {
                    if ($then && is_callable($then['function'])) {
                        return call_user_func_array($then['function'], $then['parameters']);
                    }
                }
            }
        }
        return false;
    }
}