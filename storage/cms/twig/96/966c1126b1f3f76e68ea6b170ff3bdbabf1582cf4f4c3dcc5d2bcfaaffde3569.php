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

/* C:\xampp\htdocs\tdh/themes/TDH New/partials/home_categories.htm */
class __TwigTemplate_3868346dc8fc74ceebda4d15ce293643df2b44b16a9740c8668f0f5fd18bc5cf extends \Twig\Template
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
        $tags = array("for" => 6, "if" => 132);
        $filters = array("page" => 9, "escape" => 9, "theme" => 11, "date" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['page', 'escape', 'theme', 'date'],
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
        echo "<div class=\"auto_container\">
    <div class=\"main_wrapper\">
        <div class=\"content\">
            <div class=\"main_content\">
                <div class=\"blocks\">
                    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "slice", [0 => 0, 1 => 3], "method", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                    <div class=\"block\">
                        <div class=\"title\">
                            <a href=\"";
            // line 9
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 9)]);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</a>
                            <a href=\"";
            // line 10
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 10)]);
            echo "\">
                                <img src=\"";
            // line 11
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-right.svg");
            echo "\" alt=\"\">
                            </a>
                        </div>
                        
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "getPosts", [], "method", false, false, true, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 16
                echo "                            <div class=\"news_info\">
                                <div class=\"left_date\">
                                    ";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 18), 18, $this->source), "d.m"), "html", null, true);
                echo " 
                                </div>
                                <a href=\"";
                // line 20
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                echo "/post/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\" class=\"news_text\">
                                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "
                                </a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                        
                        
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    <!-- taze -->
                    <div class=\"banner\">
                        <div class=\"banner_img\">
                            <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bann.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"banner_text\">
                            Доклад Уполномоченного по правам человека в <br>
                            Туркменистане по итогам 2020 года
                        </div>
                    </div>

                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "slice", [0 => 3, 1 => 6], "method", false, false, true, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "                    <div class=\"block\">
                        <div class=\"title\">
                            <a href=\"";
            // line 43
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 43)]);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</a>
                            <a href=\"";
            // line 44
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 44)]);
            echo "\">
                                <img src=\"";
            // line 45
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-right.svg");
            echo "\" alt=\"\">
                            </a>
                        </div>
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "getPosts", [], "method", false, false, true, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 49
                echo "                            <div class=\"news_info\">
                                <div class=\"left_date\">
                                    ";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 51), 51, $this->source), "d.m"), "html", null, true);
                echo "
                                </div>
                                <a href=\"";
                // line 53
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                echo "/post/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "\" class=\"news_text\">
                                    ";
                // line 54
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "
                                </a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                        
                        
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    
                </div>

                
                
            </div>

            <div class=\"aside\">
                <div class=\"book\">
                    <div class=\"title\">
                        Еженедельный вестник
                    </div>
                    <div class=\"book_img\">
                        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "image", [], "any", false, false, true, 75)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getPath", [], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <button class=\"download\">
                        <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "pdf", [], "any", false, false, true, 78)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "getPath", [], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "\">
                            скачать В PDF формате
                        </a>
                    </a>
                </div>
                <div class=\"slide\">
                    <div class=\"title\">
                        Интересные ссылки
                    </div>
                    <div class=\"slide_show\">
                        <div class=\"slide_inner\">
                            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["interesting"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 90
            echo "                            <div class=\"slider__item\">
                                <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 91), "getPath", [], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                            
                          
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class=\"media\">
            <div class=\"photo\">
                <div class=\"title\">
                    <a href=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\">Фоторепортаж</a>
                    <a href=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\">
                        <img src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-right.svg");
        echo "\" alt=\"\">
                    </a>
                </div>
                <div class=\"gallery\">
                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 113
            echo "                        <div class=\"item\">
                            <div class=\"item_img\">
                                <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 115)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "path", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "\" alt=\"\">

                                <h3 class=\"photo_view\">
                                    <a class=\"fancybox\" href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 118), "first", [], "any", false, false, true, 118), "path", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "\" data-fancybox=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 118, $this->source), "html", null, true);
            echo "\"
                                        data-width=\"1500\" data-height=\"1000\"><i
                                            class=\"icon-camera\"></i> Просмотреть</a>
                                </h3>
                            </div>

                            <div style=\"display: none;\">
                                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 125), "slice", [0 => 1, 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 125), "size", [], "any", false, false, true, 125)], "method", false, false, true, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 126
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                echo "\" data-fancybox-arrows=\"true\" data-arrows=\"true\" data-fancybox=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 126, $this->source), "html", null, true);
                echo "\" data-width=\"1500\"
                                    data-height=\"1000\" data-thumb=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "\"></a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                            </div>

                            <div class=\"item_text\">
                                ";
            // line 132
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 133
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 134
($context["activeLocale"] ?? null) == "ru")) {
                // line 135
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 136
($context["activeLocale"] ?? null) == "en")) {
                // line 137
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 139
            echo "                            </div>
                            <div class=\"item_date\">
                                ";
            // line 141
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 141), 141, $this->source), "d.m.Y"), "html", null, true);
            echo "
                            </div>
                        </div>
                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </div>
            </div>
            <div class=\"video\">
                <div class=\"title\">
                    <a href=\"";
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("videos");
        echo "\">Видеорепортаж</a>
                    <a href=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("videos");
        echo "\">
                        <img src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-right.svg");
        echo "\" alt=\"\">
                    </a>
                </div>
                <div class=\"gallery\">
                    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 157
            echo "                    <div class=\"item\">
                            <div class=\"item_img\">
                                <img src=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 159)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "path", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "\" alt=\"\">

                                <div class=\"video_view\" data-src=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, true, 161)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "path", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "\">
                                    Просмотреть
                                </div>
                            </div>

                            <div class=\"player_bg\">
                                <div class=\"player\">
                                    <video class=\"player__video viewer\">
                                        <!-- <source url=\"video/3.mp4\"> -->
                                    </video>

                                    <div class=\"player__controls\">
                                        <div class=\"progress\">
                                            <div class=\"progress__filled\"></div>
                                        </div>
                                        <button class=\"player__button toggle playeer\" title=\"Toggle Play\">►</button>
                                        <div class=\"control_item\">
                                            <img src=\"";
            // line 178
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sound.svg");
            echo "\" alt=\"\" class=\"volume\">
                                            <input type=\"range\" name=\"volume\" class=\"player__slider\" min=\"0\" max=\"1\"
                                                step=\"0.05\" value=\"1\">
                                        </div>
                                        <button class=\"player__button fullscreen bigger\" title=\"FullScreen\">🞕</button>
                                    </div>
                                </div>
                            </div>

                            <div class=\"item_text\">
                                ";
            // line 188
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 189
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 190
($context["activeLocale"] ?? null) == "ru")) {
                // line 191
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 192
($context["activeLocale"] ?? null) == "en")) {
                // line 193
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 195
            echo "                            </div>
                            <div class=\"item_date\">
                                ";
            // line 197
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 197), 197, $this->source), "d.m.Y"), "html", null, true);
            echo "
                            </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Last News =================== -->
<div class=\"auto_container\">
    <div class=\"homeland\">
        <div class=\"title\">
            <a href=\"";
        // line 212
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["slug" => twig_get_attribute($this->env, $this->source, ($context["main_news_cat"] ?? null), "slug", [], "any", false, false, true, 212)]);
        echo "\">
               ";
        // line 213
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main_news_cat"] ?? null), "name", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
        echo "
            </a
            >
            <a href=\"";
        // line 216
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["slug" => twig_get_attribute($this->env, $this->source, ($context["main_news_cat"] ?? null), "slug", [], "any", false, false, true, 216)]);
        echo "\">
                <img src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-right.svg");
        echo "\" alt=\"\">
            </a>
        </div>

        <div class=\"mini_news\">
            <div class=\"news_col\">
                
                ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainNews"] ?? null), "slice", [0 => 0, 1 => 2], "method", false, false, true, 224));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 225
            echo "                <div class=\"news_item\">
                    <div class=\"left_date\">
                        ";
            // line 227
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 227), 227, $this->source), "d.m"), "html", null, true);
            echo "
                    </div>
                    <a href=\"";
            // line 229
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
            echo "\" class=\"news_text\">
                        ";
            // line 230
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            echo "
                    </a>
                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "            </div>
            <div class=\"news_col\">
                
                ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainNews"] ?? null), "slice", [0 => 2, 1 => 4], "method", false, false, true, 237));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 238
            echo "                <div class=\"news_item\">
                    <div class=\"left_date\">
                        ";
            // line 240
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 240), 240, $this->source), "d.m"), "html", null, true);
            echo "
                    </div>
                    <a href=\"";
            // line 242
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
            echo "\" class=\"news_text\">
                        ";
            // line 243
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 243), 243, $this->source), "html", null, true);
            echo "
                    </a>
                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "            </div>
        </div>
    </div>
</div>
<!-- Channel ===================== -->
<div class=\"auto_container\">
    <div class=\"channel\">
        <div class=\"channel__inner\">
            <div class=\"chanel__items\">
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 259
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___18.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 266
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___19.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___20.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 280
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___21.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 287
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___22.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 294
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___23.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
            </div><!-- chanel__items -->
        </div> <!-- channel__inner -->
    </div><!-- channel -->
</div> <!-- container -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 294,  642 => 287,  632 => 280,  622 => 273,  612 => 266,  602 => 259,  588 => 247,  578 => 243,  570 => 242,  565 => 240,  561 => 238,  557 => 237,  552 => 234,  542 => 230,  534 => 229,  529 => 227,  525 => 225,  521 => 224,  511 => 217,  507 => 216,  501 => 213,  497 => 212,  484 => 201,  474 => 197,  470 => 195,  464 => 193,  462 => 192,  457 => 191,  455 => 190,  450 => 189,  448 => 188,  435 => 178,  415 => 161,  410 => 159,  406 => 157,  402 => 156,  395 => 152,  391 => 151,  387 => 150,  381 => 146,  370 => 141,  366 => 139,  360 => 137,  358 => 136,  353 => 135,  351 => 134,  346 => 133,  344 => 132,  339 => 129,  331 => 127,  324 => 126,  320 => 125,  308 => 118,  302 => 115,  298 => 113,  294 => 112,  287 => 108,  283 => 107,  279 => 106,  266 => 95,  256 => 91,  253 => 90,  249 => 89,  235 => 78,  229 => 75,  214 => 62,  205 => 58,  195 => 54,  187 => 53,  182 => 51,  178 => 49,  174 => 48,  168 => 45,  164 => 44,  158 => 43,  154 => 41,  150 => 40,  139 => 32,  134 => 29,  125 => 25,  115 => 21,  107 => 20,  102 => 18,  98 => 16,  94 => 15,  87 => 11,  83 => 10,  77 => 9,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"auto_container\">
    <div class=\"main_wrapper\">
        <div class=\"content\">
            <div class=\"main_content\">
                <div class=\"blocks\">
                    {% for item in categories.slice(0,3) %}
                    <div class=\"block\">
                        <div class=\"title\">
                            <a href=\"{{ 'category'|page({ slug: item.slug })}}\"> {{item.name}}</a>
                            <a href=\"{{ 'category'|page({ slug: item.slug })}}\">
                                <img src=\"{{ 'assets/images/arrow-right.svg'|theme }}\" alt=\"\">
                            </a>
                        </div>
                        
                        {% for post in item.getPosts() %}
                            <div class=\"news_info\">
                                <div class=\"left_date\">
                                    {{ post.published_at| date(\"d.m\") }} 
                                </div>
                                <a href=\"{{ ''| page}}/post/{{item.id}}/{{post.slug}}\" class=\"news_text\">
                                    {{ post.title }}
                                </a>
                            </div>
                        {% endfor %}
                        
                        
                    </div>
                    {% endfor %}
                    <!-- taze -->
                    <div class=\"banner\">
                        <div class=\"banner_img\">
                            <img src=\"{{ 'assets/images/bann.png'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"banner_text\">
                            Доклад Уполномоченного по правам человека в <br>
                            Туркменистане по итогам 2020 года
                        </div>
                    </div>

                    {% for item in categories.slice(3,6) %}
                    <div class=\"block\">
                        <div class=\"title\">
                            <a href=\"{{ 'category'|page({ slug: item.slug })}}\"> {{item.name}}</a>
                            <a href=\"{{ 'category'|page({ slug: item.slug })}}\">
                                <img src=\"{{ 'assets/images/arrow-right.svg'|theme }}\" alt=\"\">
                            </a>
                        </div>
                        {% for post in item.getPosts() %}
                            <div class=\"news_info\">
                                <div class=\"left_date\">
                                    {{ post.published_at| date(\"d.m\") }}
                                </div>
                                <a href=\"{{ ''| page}}/post/{{item.id}}/{{post.slug}}\" class=\"news_text\">
                                    {{ post.title }}
                                </a>
                            </div>
                        {% endfor %}
                        
                        
                    </div>
                    {% endfor %}
                    
                </div>

                
                
            </div>

            <div class=\"aside\">
                <div class=\"book\">
                    <div class=\"title\">
                        Еженедельный вестник
                    </div>
                    <div class=\"book_img\">
                        <img src=\"{{ news.image[0].getPath() }}\" alt=\"\">
                    </div>
                    <button class=\"download\">
                        <a href=\"{{ news.pdf[0].getPath() }}\">
                            скачать В PDF формате
                        </a>
                    </a>
                </div>
                <div class=\"slide\">
                    <div class=\"title\">
                        Интересные ссылки
                    </div>
                    <div class=\"slide_show\">
                        <div class=\"slide_inner\">
                            {% for item in interesting %}
                            <div class=\"slider__item\">
                                <img src=\"{{ item.image.getPath() }}\" alt=\"\">
                            </div>
                            
                            {% endfor %}
                            
                          
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class=\"media\">
            <div class=\"photo\">
                <div class=\"title\">
                    <a href=\"{{ 'gallery'|page}}\">Фоторепортаж</a>
                    <a href=\"{{ 'gallery'|page}}\">
                        <img src=\"{{ 'assets/images/arrow-right.svg'|theme }}\" alt=\"\">
                    </a>
                </div>
                <div class=\"gallery\">
                    {% for  key, item in gallery %}
                        <div class=\"item\">
                            <div class=\"item_img\">
                                <img src=\"{{item.image[0].path}}\" alt=\"\">

                                <h3 class=\"photo_view\">
                                    <a class=\"fancybox\" href=\"{{item.getImages().first.path}}\" data-fancybox=\"{{key}}\"
                                        data-width=\"1500\" data-height=\"1000\"><i
                                            class=\"icon-camera\"></i> Просмотреть</a>
                                </h3>
                            </div>

                            <div style=\"display: none;\">
                                {% for image in item.getImages().slice(1,item.getImages().size) %}
                                <a href=\"{{image.path}}\" data-fancybox-arrows=\"true\" data-arrows=\"true\" data-fancybox=\"{{key}}\" data-width=\"1500\"
                                    data-height=\"1000\" data-thumb=\"{{image.path}}\"></a>
                                {% endfor %}
                            </div>

                            <div class=\"item_text\">
                                {% if activeLocale == \"tm\" %}
                                    {{ item.title_tm }}
                                {% elseif activeLocale == \"ru\" %}
                                    {{ item.title_ru }}
                                {% elseif activeLocale == \"en\" %}
                                    {{ item.title_en }}
                                {% endif %}
                            </div>
                            <div class=\"item_date\">
                                {{ item.date| date(\"d.m.Y\") }}
                            </div>
                        </div>
                        
                    {% endfor %}
                </div>
            </div>
            <div class=\"video\">
                <div class=\"title\">
                    <a href=\"{{ 'videos'|page}}\">Видеорепортаж</a>
                    <a href=\"{{ 'videos'|page}}\">
                        <img src=\"{{ 'assets/images/arrow-right.svg'|theme }}\" alt=\"\">
                    </a>
                </div>
                <div class=\"gallery\">
                    {% for item in videos %}
                    <div class=\"item\">
                            <div class=\"item_img\">
                                <img src=\"{{item.image[0].path}}\" alt=\"\">

                                <div class=\"video_view\" data-src=\"{{item.video[0].path}}\">
                                    Просмотреть
                                </div>
                            </div>

                            <div class=\"player_bg\">
                                <div class=\"player\">
                                    <video class=\"player__video viewer\">
                                        <!-- <source url=\"video/3.mp4\"> -->
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

                            <div class=\"item_text\">
                                {% if activeLocale == \"tm\" %}
                                    {{ item.title_tm }}
                                {% elseif activeLocale == \"ru\" %}
                                    {{ item.title_ru }}
                                {% elseif activeLocale == \"en\" %}
                                    {{ item.title_en }}
                                {% endif %}
                            </div>
                            <div class=\"item_date\">
                                {{ item.date| date(\"d.m.Y\") }}
                            </div>
                    </div>
                    {% endfor %}
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Last News =================== -->
<div class=\"auto_container\">
    <div class=\"homeland\">
        <div class=\"title\">
            <a href=\"{{ 'category'|page({ slug: main_news_cat.slug })}}\">
               {{main_news_cat.name}}
            </a
            >
            <a href=\"{{ 'category'|page({ slug: main_news_cat.slug })}}\">
                <img src=\"{{ 'assets/images/arrow-right.svg'|theme }}\" alt=\"\">
            </a>
        </div>

        <div class=\"mini_news\">
            <div class=\"news_col\">
                
                {% for item in mainNews.slice(0,2) %}
                <div class=\"news_item\">
                    <div class=\"left_date\">
                        {{ item.date| date(\"d.m\") }}
                    </div>
                    <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\" class=\"news_text\">
                        {{item.title}}
                    </a>
                </div>
               {% endfor %}
            </div>
            <div class=\"news_col\">
                
                {% for item in mainNews.slice(2,4) %}
                <div class=\"news_item\">
                    <div class=\"left_date\">
                        {{ item.date| date(\"d.m\") }}
                    </div>
                    <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\" class=\"news_text\">
                        {{item.title}}
                    </a>
                </div>
               {% endfor %}
            </div>
        </div>
    </div>
</div>
<!-- Channel ===================== -->
<div class=\"auto_container\">
    <div class=\"channel\">
        <div class=\"channel__inner\">
            <div class=\"chanel__items\">
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"{{ 'assets/images/NoPath___18.png'|theme }}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"{{ 'assets/images/NoPath___19.png'|theme }}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"{{ 'assets/images/NoPath___20.png'|theme }}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"{{ 'assets/images/NoPath___21.png'|theme }}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"{{ 'assets/images/NoPath___22.png'|theme }}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"{{ 'assets/images/NoPath___23.png'|theme }}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
            </div><!-- chanel__items -->
        </div> <!-- channel__inner -->
    </div><!-- channel -->
</div> <!-- container -->", "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_categories.htm", "");
    }
}
