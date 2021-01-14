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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/archive.htm */
class __TwigTemplate_2b144fa074fc6dfd0f910bce8f69b90a8b1b9ce8474482d2c9bf2bf36ec41bb9 extends \Twig\Template
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
        $tags = array("for" => 19);
        $filters = array("escape" => 23, "date" => 23, "theme" => 53, "page" => 76);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'date', 'theme', 'page'],
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
        echo "<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <div class=\"page_name\">
                Главная
            </div>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                Архив
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Архив
                </div>
                <div class=\"main_news\">
                    
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todayNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                    <div class=\"main_news-item\">
                        <div class=\"main_news-date\">
                            <span>
                                ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 23), 23, $this->source), "d.m"), "html", null, true);
            echo "
                            </span>
                            <span>
                                ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 26), 26, $this->source), "Y"), "html", null, true);
            echo "
                            </span>
                        </div>
                        <div class=\"main_news-content\">
                            <div class=\"main_news-title\">

                                ";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
                            </div>
                            <div class=\"main_news-text\">
                                
                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "introductory", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "       
                    
                </div>
            </div>
            <div class=\"right_side half full\">
                <div class=\"title\">
                    Календарь
                </div>

                <div class=\"cal\">
                    <div class=\"calendar\">
                        <input type=\"text\" name=\"cal\" id=\"calendar\" />
                    </div>
                    <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" class=\"prev_btn\" alt=\"\">
                    <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" class=\"next_btn\" alt=\"\">
                </div>

            </div>
        </div>
    </div>
</section>

<script src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/moment.min.js");
        echo "\"></script>
<script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/lightpick.js");
        echo "\"></script>
<script>;

    var picker = new Lightpick({
        inline: true,
        selectBackward: true,
        selectForward: false,
        singleDate: true,
        startDate: moment('";
        // line 71
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["dateToday"] ?? null), 71, $this->source), "html", null, true);
        echo "', \"Y-M-D\"),
        maxDate: moment().endOf(\"day\"),
        lang: 'ru',
        field: document.getElementById('calendar'),
        onSelect:function(date){
            window.location.replace(\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "?date=\" + date.format(\"Y-M-D\"));
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/archive.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 76,  169 => 71,  158 => 63,  154 => 62,  143 => 54,  139 => 53,  124 => 40,  113 => 36,  106 => 32,  97 => 26,  91 => 23,  86 => 20,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <div class=\"page_name\">
                Главная
            </div>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                Архив
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Архив
                </div>
                <div class=\"main_news\">
                    
                {% for item in todayNews %}
                    <div class=\"main_news-item\">
                        <div class=\"main_news-date\">
                            <span>
                                {{ item.published_at| date(\"d.m\") }}
                            </span>
                            <span>
                                {{ item.published_at| date(\"Y\") }}
                            </span>
                        </div>
                        <div class=\"main_news-content\">
                            <div class=\"main_news-title\">

                                {{item.title}}
                            </div>
                            <div class=\"main_news-text\">
                                
                                {{item.introductory}}
                            </div>
                        </div>
                    </div>
                {% endfor %}       
                    
                </div>
            </div>
            <div class=\"right_side half full\">
                <div class=\"title\">
                    Календарь
                </div>

                <div class=\"cal\">
                    <div class=\"calendar\">
                        <input type=\"text\" name=\"cal\" id=\"calendar\" />
                    </div>
                    <img src=\"{{ 'assets/images/left.svg'|theme }}\" class=\"prev_btn\" alt=\"\">
                    <img src=\"{{ 'assets/images/right.svg'|theme }}\" class=\"next_btn\" alt=\"\">
                </div>

            </div>
        </div>
    </div>
</section>

<script src=\"{{ 'assets/js/moment.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/lightpick.js'|theme }}\"></script>
<script>;

    var picker = new Lightpick({
        inline: true,
        selectBackward: true,
        selectForward: false,
        singleDate: true,
        startDate: moment('{{dateToday}}', \"Y-M-D\"),
        maxDate: moment().endOf(\"day\"),
        lang: 'ru',
        field: document.getElementById('calendar'),
        onSelect:function(date){
            window.location.replace(\"{{ ''| page}}?date=\" + date.format(\"Y-M-D\"));
        }
    });
</script>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/archive.htm", "");
    }
}
