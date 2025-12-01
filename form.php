<?php
class Form
{
    private $fields = array();
    private $action;
    private $submit = "Submit";
    private $jumField = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function addField($name, $label)
    {
        $this->fields[$this->jumField]['label'] = $label;
        $this->fields[$this->jumField]['name']  = $name;
        $this->jumField++;
    }

    public function displayForm()
    {
        echo "<form action='".$this->action."' method='POST'>";
        echo "<table border='0' width='100%'>";

        foreach ($this->fields as $field) {
            echo "<tr>";
            echo "<td align='right'>".$field['label']."</td>";
            echo "<td><input type='text' name='".$field['name']."'></td>";
            echo "</tr>";
        }

        echo "<tr><td colspan='2'><input type='submit' value='".$this->submit."'></td></tr>";
        echo "</table>";
        echo "</form>";
    }
}
?>
