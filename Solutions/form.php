<?php
class Form{
    private string $name;
    private string $method;
    private string $action;
    private array $inputs = [];
    private string $submitButton = 'submit';

    public function __construct($name, $method, $action)
    {
       $this->name = $name;
       $this->method = $method;
       $this->action = $action;
    }
public function addInput(Input $input): void
{
    $this->inputs[] = $input;
}
public function setSubmitButton($button): void
{
    $this->submitButton = $button;
}
public function render(): string
{
    $html = '<form name = "' . $this->name . '"method = "' . $this->method . '"action = "' . $this->action . '">' . PHP_EOL;
    foreach ($this->inputs as $input) {
        $html .= $input->render() . PHP_EOL;
    }
    $html .= '<input type = "submit" value = "' . $this->submitButton . '">' . PHP_EOL;
    $html .= '</form>';
    return $html;
}
}

abstract class Input {
    protected string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function render();
}
class InputText extends Input
{
    public function render(): string
    {
        return '<input type = "text" name = "' . $this->name . '">' . PHP_EOL;

    }
}
class InputInt extends Input
{
    public function render(): string
    {
        return '<input type = "number" name = "' . $this->name . '">' . PHP_EOL;
    }
}
class InputFloat extends Input
{
    public function render(): string
    {
        return '<input type = "number" name = "' . $this->name . '">' . PHP_EOL;
    }

}
$name = "user-form";
$method = 'post';
$action = 'form.php';
$form = new Form($name, $method, $action);
$form->addInput(new InputText('first-name')) . PHP_EOL;
$form->addInput(new InputText('last-name')) . PHP_EOL;
$form->addInput(new InputInt('age')) . PHP_EOL;
$form->addInput(new InputText('town')) . PHP_EOL;
$form->addInput(new InputText('company')) . PHP_EOL;
$form->addInput(new InputFloat('salary')) . PHP_EOL;

echo $form->render();
