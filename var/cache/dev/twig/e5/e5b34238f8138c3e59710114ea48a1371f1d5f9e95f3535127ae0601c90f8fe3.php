<?php

/* AppBundle:Like:likeslist.html.twig */
class __TwigTemplate_60abc8b8f98b088f701e3b058556579f8acb30464306d23c836d4ed32a09a2e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "AppBundle:Like:likeslist.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Like:likeslist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "     <div class=\"container\">

         <div id=\"timeline\" class=\"col-lg-12 box-default pull-left\">
             <h1 class=\"box-header\">Publications that you like ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile_user"]) ? $context["profile_user"] : $this->getContext($context, "profile_user")), "nick", array()), "html", null, true);
        echo "</h1>

             <div class=\"count\">
                 <span class=\"label label-primary\">
                     Total : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["likeslist"]) ? $context["likeslist"] : $this->getContext($context, "likeslist")), "getTotalItemCount", array()), "html", null, true);
        echo "
                 </span>
             </div>

             <hr>

             <div class=\"box-content\">
                 ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["likeslist"]) ? $context["likeslist"] : $this->getContext($context, "likeslist")));
        foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
            // line 24
            echo "                     ";
            $context["publication"] = $this->getAttribute($context["like"], "publication", array());
            // line 25
            echo "                     <div class=\"col-lg-12 publication-item\">
                         <div class=\"avatar\">
                             ";
            // line 27
            if (($this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "image", array()) == null)) {
                // line 28
                echo "                                 <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "nick", array()), "html", null, true);
                echo "\">
                             ";
            } else {
                // line 30
                echo "                                 <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "id", array())) . "_usermedia/") . $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "nick", array()), "html", null, true);
                echo "\">
                             ";
            }
            // line 32
            echo "                         </div>

                         <div class=\"publication-item-content\">
                             <p>
                                 <a class=\"pub-name-link\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "nick", array()))), "html", null, true);
            echo "\">
                                     ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "surname", array()), "html", null, true);
            echo "
                                 </a>
                                 -
                                 ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "nick", array()), "html", null, true);
            echo "
                                 -
                                 <span class=\"pub-date\">
                                     ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LongTimeExtension')->LongTimeFilter($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "createdAt", array())), "html", null, true);
            echo "
                                 </span>
                             </p>

                             <p>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "texto", array()), "html", null, true);
            echo "</p>

                             ";
            // line 49
            if (($this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 50
                echo "                                 <span data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "id", array()), "html", null, true);
                echo "\" class=\"btn-delete-pub glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                             ";
            }
            // line 52
            echo "
                             ";
            // line 53
            if (($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "document", array(), "any", true, true) && ($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "document", array()) != null))) {
                // line 54
                echo "                                 <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "id", array())) . "_usermedia/publications/documents/") . $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "document", array()))), "html", null, true);
                echo "\"
                                    class=\"btn-doc glyphicon glyphicon-save\" aria-hidden=\"true\" target=\"_blank\">
                                 </a>
                             ";
            }
            // line 58
            echo "
                             ";
            // line 59
            if (($this->getAttribute((isset($context["publication"]) ? $context["publication"] : null), "image", array(), "any", true, true) && ($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "image", array()) != null))) {
                // line 60
                echo "                                 <span class=\"btn-img glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                                 <div class=\"clearfix\"></div>

                                 <div class=\"pub-image\">
                                     <img src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "user", array()), "id", array())) . "_usermedia/publications/images/") . $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "image", array()), "html", null, true);
                echo "\">
                                 </div>
                             ";
            }
            // line 67
            echo "
                         </div>
                         <div class=\"pull-right like\">
                             <span data-id=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "id", array()), "html", null, true);
            echo "\"
                                   class=\"
                                   ";
            // line 72
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), (isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication"))) == true)) {
                // line 73
                echo "                                        hidden
                                   ";
            }
            // line 75
            echo "                                   btn-like glyphicon glyphicon-heart-empty\"
                                   aria-hidden=\"true\"
                                   data-toggle=\"tooltip\"
                                   data-placement=\"bottom\"
                                   title=\"Like\">
                             </span>
                             <span data-id=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "id", array()), "html", null, true);
            echo "\"
                                   class=\"
                                   ";
            // line 83
            if (($this->env->getExtension('AppBundle\Twig\LikeExtension')->islikeFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), (isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication"))) == false)) {
                // line 84
                echo "                                        hidden
                                   ";
            }
            // line 86
            echo "                                   btn-dislike active glyphicon glyphicon-heart\"
                                   aria-hidden=\"true\"
                                   data-toggle=\"tooltip\"
                                   data-placement=\"bottom\"
                                   title=\"Unlike\">
                             </span>
                         </div>
                         <small class=\"pull-left\">";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\LikeExtension')->numlikesFilter((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication"))), "html", null, true);
            echo " Likes</small>
                         <div class=\"clearfix\"></div>
                         <hr>
                     </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                 <div class=\"navigation\">
                     ";
        // line 100
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["likeslist"]) ? $context["likeslist"] : $this->getContext($context, "likeslist")));
        echo "
                 </div>
             </div>
         </div>

     </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Like:likeslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 100,  243 => 98,  232 => 93,  223 => 86,  219 => 84,  217 => 83,  212 => 81,  204 => 75,  200 => 73,  198 => 72,  193 => 70,  188 => 67,  180 => 64,  174 => 60,  172 => 59,  169 => 58,  161 => 54,  159 => 53,  156 => 52,  150 => 50,  148 => 49,  143 => 47,  136 => 43,  130 => 40,  122 => 37,  118 => 36,  112 => 32,  104 => 30,  96 => 28,  94 => 27,  90 => 25,  87 => 24,  83 => 23,  73 => 16,  66 => 12,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layouts:layout.html.twig\" %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/custom/home.js') }}\"></script>
{% endblock %}

{% block content %}
     <div class=\"container\">

         <div id=\"timeline\" class=\"col-lg-12 box-default pull-left\">
             <h1 class=\"box-header\">Publications that you like {{ profile_user.nick }}</h1>

             <div class=\"count\">
                 <span class=\"label label-primary\">
                     Total : {{ likeslist.getTotalItemCount }}
                 </span>
             </div>

             <hr>

             <div class=\"box-content\">
                 {% for like in likeslist %}
                     {% set publication = like.publication %}
                     <div class=\"col-lg-12 publication-item\">
                         <div class=\"avatar\">
                             {% if publication.user.image == null %}
                                 <img src=\"{{ asset('assets/images/default.png') }}\" alt=\"{{ publication.user.nick }}\">
                             {% else %}
                                 <img src=\"{{ asset('uploads/media/'~publication.user.id~'_usermedia/'~publication.user.image) }}\" alt=\"{{ publication.user.nick }}\">
                             {% endif %}
                         </div>

                         <div class=\"publication-item-content\">
                             <p>
                                 <a class=\"pub-name-link\" href=\"{{ path('user_profile', {'nick': publication.user.nick}) }}\">
                                     {{ publication.user.name }} {{ publication.user.surname }}
                                 </a>
                                 -
                                 {{ publication.user.nick }}
                                 -
                                 <span class=\"pub-date\">
                                     {{ publication.createdAt|long_time }}
                                 </span>
                             </p>

                             <p>{{ publication.texto }}</p>

                             {% if (publication.user.id is defined) and (publication.user.id == app.user.id) %}
                                 <span data-id=\"{{ publication.id }}\" class=\"btn-delete-pub glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                             {% endif %}

                             {% if(publication.document is defined) and (publication.document != null) %}
                                 <a href=\"{{ asset('uploads/media/'~publication.user.id~'_usermedia/publications/documents/'~publication.document) }}\"
                                    class=\"btn-doc glyphicon glyphicon-save\" aria-hidden=\"true\" target=\"_blank\">
                                 </a>
                             {% endif %}

                             {% if(publication.image is defined) and (publication.image != null) %}
                                 <span class=\"btn-img glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                                 <div class=\"clearfix\"></div>

                                 <div class=\"pub-image\">
                                     <img src=\"{{ asset('uploads/media/'~publication.user.id~'_usermedia/publications/images/'~publication.image) }}\" alt=\"{{ publication.image }}\">
                                 </div>
                             {% endif %}

                         </div>
                         <div class=\"pull-right like\">
                             <span data-id=\"{{ publication.id }}\"
                                   class=\"
                                   {% if app.user|islike(publication) == true %}
                                        hidden
                                   {% endif %}
                                   btn-like glyphicon glyphicon-heart-empty\"
                                   aria-hidden=\"true\"
                                   data-toggle=\"tooltip\"
                                   data-placement=\"bottom\"
                                   title=\"Like\">
                             </span>
                             <span data-id=\"{{ publication.id }}\"
                                   class=\"
                                   {% if app.user|islike(publication) == false %}
                                        hidden
                                   {% endif %}
                                   btn-dislike active glyphicon glyphicon-heart\"
                                   aria-hidden=\"true\"
                                   data-toggle=\"tooltip\"
                                   data-placement=\"bottom\"
                                   title=\"Unlike\">
                             </span>
                         </div>
                         <small class=\"pull-left\">{{ publication|numlikes }} Likes</small>
                         <div class=\"clearfix\"></div>
                         <hr>
                     </div>
                 {% endfor %}

                 <div class=\"navigation\">
                     {{ knp_pagination_render(likeslist) }}
                 </div>
             </div>
         </div>

     </div>
{% endblock %}", "AppBundle:Like:likeslist.html.twig", "C:\\wamp\\www\\khairi_pfe\\src\\AppBundle/Resources/views/Like/likeslist.html.twig");
    }
}
