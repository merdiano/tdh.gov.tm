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

/* C:\xampp\htdocs\tdh/themes/TDH New/partials/footer.htm */
class __TwigTemplate_d5cefdf838955dd6b11651fa30601c2cea9df1e64f21bde056c36fb9c72c6f76 extends \Twig\Template
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
        $filters = array("page" => 5, "theme" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
        echo "<!-- Footer ====================== -->
<div class=\"auto_container\">
    <div class=\"footer\">
        <div class=\"foot_logo\">
            <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Logo.svg");
        echo "\" alt=\"Logo\">

            </a>
        </div>
        <div class=\"foot_text\">
            Copyright 2012-2020 Государственное информационное агентство Туркменистана (TDH) - Туркменистан сегодня
        </div>
    </div>
</div>

<!-- Countries =================== -->
<div class=\"auto_container\">
    <div class=\"country\">
        <div class=\"main_end\">
            <div class=\"visitor\">
                Посетители
            </div>
        </div>
        <div class=\"visit\">
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag3.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    866,002
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag1.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    605,969
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag2.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    244,301
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag0.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    161,350
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag4.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    128,317
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag5.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    93,801
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag6.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    80,269
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag7.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    78,973
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag8.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    65,736
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag9.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    64,500
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag11.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    60,259
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flag2.svg");
        echo "\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    54,273
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 115,  206 => 107,  195 => 99,  184 => 91,  173 => 83,  162 => 75,  151 => 67,  140 => 59,  129 => 51,  118 => 43,  107 => 35,  96 => 27,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer ====================== -->
<div class=\"auto_container\">
    <div class=\"footer\">
        <div class=\"foot_logo\">
            <a href=\"{{ 'home'|page}}\">
                <img src=\"{{ 'assets/images/Logo.svg'|theme }}\" alt=\"Logo\">

            </a>
        </div>
        <div class=\"foot_text\">
            Copyright 2012-2020 Государственное информационное агентство Туркменистана (TDH) - Туркменистан сегодня
        </div>
    </div>
</div>

<!-- Countries =================== -->
<div class=\"auto_container\">
    <div class=\"country\">
        <div class=\"main_end\">
            <div class=\"visitor\">
                Посетители
            </div>
        </div>
        <div class=\"visit\">
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag3.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    866,002
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag1.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    605,969
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag2.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    244,301
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag0.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    161,350
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag4.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    128,317
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag5.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    93,801
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag6.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    80,269
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag7.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    78,973
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag8.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    65,736
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag9.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    64,500
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag11.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    60,259
                </div>
            </div>
            <div class=\"visit_item\">
                <div class=\"visit_icon\">
                    <img src=\"{{ 'assets/images/flag2.svg'|theme }}\" alt=\"\">
                </div>
                <div class=\"visit_num\">
                    54,273
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/footer.htm", "");
    }
}
