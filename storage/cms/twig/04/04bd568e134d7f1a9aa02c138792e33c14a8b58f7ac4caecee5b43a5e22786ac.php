<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\tdh/plugins/admin/contact/components/contactform/default.htm */
class __TwigTemplate_084a8aed649ea35e65441ef093b18ca57d2cb1fab727be68610cd2afee2e92cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form data-request=\"onSend\" data-request-success=\"alert('Message Sent')\" class=\"contact_form\" >
    <div class=\"contact_row\">
        <input type=\"text\" placeholder=\"Имя\" name='name' class=\"contact_first\">
        <input type=\"text\" placeholder=\"Фамилия\" name='surname' class=\"contact_second\">
    </div>
    <div class=\"contact_row\">
        <input type=\"text\" placeholder=\"Электронная почта\" name='email'class=\"contact_first\">
        <input type=\"text\" placeholder=\"Тема\" name='theme' class=\"contact_second\">
    </div>
    <textarea  placeholder=\"Сообщение\" name='content' class=\"contact_textarea\"></textarea>
    <button class=\"contact_btn\" type=\"submit\">
        Отправить сообщение
    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/plugins/admin/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onSend\" data-request-success=\"alert('Message Sent')\" class=\"contact_form\" >
    <div class=\"contact_row\">
        <input type=\"text\" placeholder=\"Имя\" name='name' class=\"contact_first\">
        <input type=\"text\" placeholder=\"Фамилия\" name='surname' class=\"contact_second\">
    </div>
    <div class=\"contact_row\">
        <input type=\"text\" placeholder=\"Электронная почта\" name='email'class=\"contact_first\">
        <input type=\"text\" placeholder=\"Тема\" name='theme' class=\"contact_second\">
    </div>
    <textarea  placeholder=\"Сообщение\" name='content' class=\"contact_textarea\"></textarea>
    <button class=\"contact_btn\" type=\"submit\">
        Отправить сообщение
    </button>
</form>", "C:\\xampp\\htdocs\\tdh/plugins/admin/contact/components/contactform/default.htm", "");
    }
}
