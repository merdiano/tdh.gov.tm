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
        $tags = array("for" => 6, "if" => 120);
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
                                <div class=\"news_text\">
                                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "
                                </div>
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
                                <div class=\"news_text\">
                                    ";
                // line 54
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "
                                </div>
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 113
            echo "                        <div class=\"item\">
                            <div class=\"item_img\">
                                <a href=\"";
            // line 115
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("photos", ["category_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 115)]);
            echo "\">
                                    <img src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cat_image", [], "any", false, false, true, 116), "path", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"item_text\">
                                ";
            // line 120
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 121
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 122
($context["activeLocale"] ?? null) == "ru")) {
                // line 123
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 124
($context["activeLocale"] ?? null) == "en")) {
                // line 125
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 127
            echo "                            </div>
                            <div class=\"item_date\">
                                ";
            // line 129
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 129), 129, $this->source), "d.m.Y"), "html", null, true);
            echo "
                            </div>
                        </div>
                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                </div>
            </div>
            <div class=\"video\">
                <div class=\"title\">
                    <a href=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("videos");
        echo "\">Видеорепортаж</a>
                    <a href=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("videos");
        echo "\">
                        <img src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-right.svg");
        echo "\" alt=\"\">
                    </a>
                </div>
                <div class=\"gallery\">
                    ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 145
            echo "                    <div class=\"item\">
                            <div class=\"item_img\">
                                <a href=\"#\">
                                    <img src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 148)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "path", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"item_text\">
                                ";
            // line 152
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 153
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 154
($context["activeLocale"] ?? null) == "ru")) {
                // line 155
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 156
($context["activeLocale"] ?? null) == "en")) {
                // line 157
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 159
            echo "                            </div>
                            <div class=\"item_date\">
                                ";
            // line 161
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 161), 161, $this->source), "d.m.Y"), "html", null, true);
            echo "
                            </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
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
            <div>
               ";
        // line 177
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main_news_cat"] ?? null), "name", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
        echo "
            </div>
            <a href=\"#\">
                <img src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-right.svg");
        echo "\" alt=\"\">
            </a>
        </div>

        <div class=\"mini_news\">
            <div class=\"news_col\">
                
                ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainNews"] ?? null), "slice", [0 => 0, 1 => 2], "method", false, false, true, 187));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 188
            echo "                <div class=\"news_item\">
                    <div class=\"left_date\">
                        ";
            // line 190
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 190), 190, $this->source), "d.m"), "html", null, true);
            echo "
                    </div>
                    <div class=\"news_text\">
                       ";
            // line 193
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "            </div>
            <div class=\"news_col\">
                
                ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainNews"] ?? null), "slice", [0 => 2, 1 => 4], "method", false, false, true, 200));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 201
            echo "                <div class=\"news_item\">
                    <div class=\"left_date\">
                        ";
            // line 203
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 203), 203, $this->source), "d.m"), "html", null, true);
            echo "
                    </div>
                    <div class=\"news_text\">
                        ";
            // line 206
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
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
        // line 222
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___18.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___19.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___20.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___21.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___22.png");
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"#\">
                            <img src=\"";
        // line 257
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
        return array (  556 => 257,  546 => 250,  536 => 243,  526 => 236,  516 => 229,  506 => 222,  492 => 210,  482 => 206,  476 => 203,  472 => 201,  468 => 200,  463 => 197,  453 => 193,  447 => 190,  443 => 188,  439 => 187,  429 => 180,  423 => 177,  409 => 165,  399 => 161,  395 => 159,  389 => 157,  387 => 156,  382 => 155,  380 => 154,  375 => 153,  373 => 152,  366 => 148,  361 => 145,  357 => 144,  350 => 140,  346 => 139,  342 => 138,  336 => 134,  325 => 129,  321 => 127,  315 => 125,  313 => 124,  308 => 123,  306 => 122,  301 => 121,  299 => 120,  292 => 116,  288 => 115,  284 => 113,  280 => 112,  273 => 108,  269 => 107,  265 => 106,  252 => 95,  242 => 91,  239 => 90,  235 => 89,  221 => 78,  215 => 75,  200 => 62,  191 => 58,  181 => 54,  175 => 51,  171 => 49,  167 => 48,  161 => 45,  157 => 44,  151 => 43,  147 => 41,  143 => 40,  132 => 32,  127 => 29,  118 => 25,  108 => 21,  102 => 18,  98 => 16,  94 => 15,  87 => 11,  83 => 10,  77 => 9,  73 => 7,  69 => 6,  62 => 1,);
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
                                <div class=\"news_text\">
                                    {{ post.title }}
                                </div>
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
                                <div class=\"news_text\">
                                    {{ post.title }}
                                </div>
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
                    {% for item in gallery %}
                        <div class=\"item\">
                            <div class=\"item_img\">
                                <a href=\"{{ 'photos'|page({ category_id: item.id })}}\">
                                    <img src=\"{{item.cat_image.path}}\" alt=\"\">
                                </a>
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
                                <a href=\"#\">
                                    <img src=\"{{item.image[0].path}}\" alt=\"\">
                                </a>
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
            <div>
               {{main_news_cat.name}}
            </div>
            <a href=\"#\">
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
                    <div class=\"news_text\">
                       {{item.title}}
                    </div>
                </div>
               {% endfor %}
            </div>
            <div class=\"news_col\">
                
                {% for item in mainNews.slice(2,4) %}
                <div class=\"news_item\">
                    <div class=\"left_date\">
                        {{ item.date| date(\"d.m\") }}
                    </div>
                    <div class=\"news_text\">
                        {{item.title}}
                    </div>
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
