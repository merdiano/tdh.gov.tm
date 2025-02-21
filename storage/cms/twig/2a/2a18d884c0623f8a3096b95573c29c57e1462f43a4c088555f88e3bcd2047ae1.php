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
        $tags = array("for" => 22);
        $filters = array("page" => 4, "escape" => 26, "date" => 26, "theme" => 56);
        $functions = array("url" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'escape', 'date', 'theme'],
                ['url']
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
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todayNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                    <div class=\"main_news-item\">
                        <div class=\"main_news-date\">
                            <span>
                                ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 26), 26, $this->source), "d.m"), "html", null, true);
            echo "
                            </span>
                            <span>
                                ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 29), 29, $this->source), "Y"), "html", null, true);
            echo "
                            </span>
                        </div>
                        <div class=\"main_news-content\">
                            <div class=\"main_news-title\">
                                <a href=\"";
            // line 34
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\">
                                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"main_news-text\">
                                
                                ";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "introductory", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" class=\"prev_btn\" alt=\"\">
                    <img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" class=\"next_btn\" alt=\"\">
                </div>

            </div>
        </div>
    </div>
</section>

<script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/moment.min.js");
        echo "\"></script>
<script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/lightpick.js");
        echo "\"></script>
<script>;

    var picker = new Lightpick({
        inline: true,
        selectBackward: true,
        selectForward: false,
        singleDate: true,
        startDate: moment('";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["dateToday"] ?? null), 74, $this->source), "html", null, true);
        echo "', \"Y-M-D\"),
        maxDate: moment().endOf(\"day\"),
        lang: 'ru',
        field: document.getElementById('calendar'),
        onSelect:function(date){
            window.location.replace(\"";
        // line 79
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
        return array (  190 => 79,  182 => 74,  171 => 66,  167 => 65,  156 => 57,  152 => 56,  137 => 43,  126 => 39,  119 => 35,  111 => 34,  103 => 29,  97 => 26,  92 => 23,  88 => 22,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"{{ 'home'|page}}\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
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
                                <a href=\"{{ url('/') }}/post/{{item.id}}/{{item.slug}}\">
                                    {{item.title}}</a>
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
