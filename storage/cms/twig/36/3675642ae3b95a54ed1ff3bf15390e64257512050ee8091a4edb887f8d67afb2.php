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

/* __string_template__7d875bae73054ccd1f069742cf3cbf215cce12c9a8431497d26cdb1c588b4db1 */
class __TwigTemplate_8ae543eedd2ca4cced5e5f9d2e8a2626c4ccad9378f2ba1461c84fbe8c4c653b extends \Twig\Template
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
        echo "title = \"Invoice\"
layout = \"renatio.demo::pdf.layouts.default\"
description = \"Invoice template\"
size = \"a4\"
orientation = \"portrait\"
==
<h1>Invoice</h1>";
    }

    public function getTemplateName()
    {
        return "__string_template__7d875bae73054ccd1f069742cf3cbf215cce12c9a8431497d26cdb1c588b4db1";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("title = \"Invoice\"
layout = \"renatio.demo::pdf.layouts.default\"
description = \"Invoice template\"
size = \"a4\"
orientation = \"portrait\"
==
<h1>Invoice</h1>", "__string_template__7d875bae73054ccd1f069742cf3cbf215cce12c9a8431497d26cdb1c588b4db1", "");
    }
}
