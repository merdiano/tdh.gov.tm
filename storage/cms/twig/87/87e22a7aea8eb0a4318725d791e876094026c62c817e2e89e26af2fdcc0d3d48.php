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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/videos.htm */
class __TwigTemplate_e5e4979b74b70495859d7a064cfc96252275598fdc26837f2bb898b44ad09fe2 extends \Twig\Template
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
        $tags = array("for" => 23, "if" => 57);
        $filters = array("page" => 6, "escape" => 26, "theme" => 44, "date" => 66, "round" => 91);
        $functions = array("url" => 107);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['page', 'escape', 'theme', 'date', 'round'],
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
        echo "<link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.6.3/plyr.css\" />

<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">

                <div class=\"page_name\">
                    Главная
                </div>
            </a>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                Видеорепортаж
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Видеорепортаж
                </div>
                <div class=\"gallery_outer\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 24
            echo "                        <div class=\"gallery_item\">
                            <div class=\"gallery_video\">
                                <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 26)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\" alt=\"\">

                                <div class=\"video_view\" data-src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, true, 28)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\">
                                    Просмотреть
                                </div>
                            </div>
                            <div class=\"player_bg\">
                                <div class=\"player\">
                                    <video class=\"player__video viewer\">

                                    </video>

                                    <div class=\"player__controls\">
                                        <div class=\"progress\">
                                            <div class=\"progress__filled\"></div>
                                        </div>
                                        <button class=\"player__button toggle playeer\" title=\"Toggle Play\">►</button>
                                        <div class=\"control_item\">
                                            <img src=\"";
            // line 44
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sound.svg");
            echo "\" alt=\"\" class=\"volume\">
                                            <input type=\"range\" name=\"volume\" class=\"player__slider\" min=\"0\" max=\"1\"
                                                step=\"0.05\" value=\"1\">
                                        </div>


                                        <button class=\"player__button fullscreen bigger\" title=\"FullScreen\">🞕</button>
                                    </div>
                                </div>
                            </div>

                            <div class=\"gallery_info\">
                                <div class=\"photo_title\">
                                    ";
            // line 57
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 58
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "
                                    ";
            } elseif ((            // line 59
($context["activeLocale"] ?? null) == "ru")) {
                // line 60
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "
                                    ";
            } elseif ((            // line 61
($context["activeLocale"] ?? null) == "en")) {
                // line 62
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "
                                    ";
            }
            // line 64
            echo "                                </div>
                                <div class=\"photo_date\">
                                    ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 66), 66, $this->source), "d.m.Y"), "html", null, true);
            echo "
                                </div>
                            </div>

                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </div>

                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "previousPageUrl", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "currentPage", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "\" class=\"input_page\">
                        </form>
                        <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "nextPageUrl", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        ";
        // line 91
        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "total", [], "any", false, false, true, 91) / twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "perPage", [], "any", false, false, true, 91)), 0, "ceil"), "html", null, true);
        echo " страниц
                    </div>
                </div>
            </div>
            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>

                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 103), 103, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"";
            // line 107
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 107), "name", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"news_text\">
                                ";
            // line 110
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            </div>
        </div>
    </div>
</section>

<script src=\"https://cdn.plyr.io/3.6.3/plyr.polyfilled.js\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/videos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 115,  250 => 110,  238 => 107,  231 => 103,  227 => 101,  223 => 100,  211 => 91,  203 => 86,  198 => 84,  193 => 82,  186 => 78,  181 => 76,  175 => 72,  163 => 66,  159 => 64,  153 => 62,  151 => 61,  146 => 60,  144 => 59,  139 => 58,  137 => 57,  121 => 44,  102 => 28,  97 => 26,  93 => 24,  89 => 23,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.6.3/plyr.css\" />

<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"{{ 'home'|page}}\">

                <div class=\"page_name\">
                    Главная
                </div>
            </a>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                Видеорепортаж
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Видеорепортаж
                </div>
                <div class=\"gallery_outer\">
                    {% for key,item in videos %}
                        <div class=\"gallery_item\">
                            <div class=\"gallery_video\">
                                <img src=\"{{item.image[0].path}}\" alt=\"\">

                                <div class=\"video_view\" data-src=\"{{item.video[0].path}}\">
                                    Просмотреть
                                </div>
                            </div>
                            <div class=\"player_bg\">
                                <div class=\"player\">
                                    <video class=\"player__video viewer\">

                                    </video>

                                    <div class=\"player__controls\">
                                        <div class=\"progress\">
                                            <div class=\"progress__filled\"></div>
                                        </div>
                                        <button class=\"player__button toggle playeer\" title=\"Toggle Play\">►</button>
                                        <div class=\"control_item\">
                                            <img src=\"{{ 'assets/images/sound.svg'|theme }}\" alt=\"\" class=\"volume\">
                                            <input type=\"range\" name=\"volume\" class=\"player__slider\" min=\"0\" max=\"1\"
                                                step=\"0.05\" value=\"1\">
                                        </div>


                                        <button class=\"player__button fullscreen bigger\" title=\"FullScreen\">🞕</button>
                                    </div>
                                </div>
                            </div>

                            <div class=\"gallery_info\">
                                <div class=\"photo_title\">
                                    {% if activeLocale == \"tm\" %}
                                        {{ item.title_tm }}
                                    {% elseif activeLocale == \"ru\" %}
                                        {{ item.title_ru }}
                                    {% elseif activeLocale == \"en\" %}
                                        {{ item.title_en }}
                                    {% endif %}
                                </div>
                                <div class=\"photo_date\">
                                    {{ item.published_at| date(\"d.m.Y\") }}
                                </div>
                            </div>

                        </div>
                    {% endfor %}
                </div>

                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"{{videos.previousPageUrl}}\">
                            <div class=\"direct_btn\">
                                    <img src=\"{{ 'assets/images/left.svg'|theme }}\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"{{videos.currentPage}}\" class=\"input_page\">
                        </form>
                        <a href=\"{{videos.nextPageUrl}}\">
                            <div class=\"direct_btn\">
                                    <img src=\"{{ 'assets/images/right.svg'|theme }}\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        {{(videos.total/videos.perPage)|round(0,\"ceil\")}} страниц
                    </div>
                </div>
            </div>
            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>

                {% for item in lastNews %}
                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            {{ item.published_at| date(\"d.m\") }}
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"{{ url('/') }}/post/{{item.id}}/{{item.slug}}\">{{item.category.name}}</a>
                            </div>
                            <div class=\"news_text\">
                                {{item.title}}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>

<script src=\"https://cdn.plyr.io/3.6.3/plyr.polyfilled.js\"></script>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/videos.htm", "");
    }
}
