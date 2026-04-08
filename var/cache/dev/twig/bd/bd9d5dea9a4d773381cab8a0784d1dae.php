<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* signin.html.twig */
class __TwigTemplate_e695139435ba6c168ba1f1dd52c9cd9b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Doctolibre</title>
    <link rel=\"stylesheet\" href=\"/css/style.css\">
</head>
<body>

    <div class=\"head\">   
        <u><b><h1>Page d'inscription</h1></b></u>
        <u><h2>Site Doctolibre</h2></u>
        ";
        // line 15
        yield "        <i><h3>It's ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</h3></i>
    </div>    

    <div class=\"main\">

        <u><h2>Je m'inscris <h2></u>
        <form method=\"post\">
            <p>Nom</p>
            <input type=\"text\" name=\"name\" placeholder=\"Doe\">
            <p>Prenom</p>
            <input type=\"text\" name=\"first_name\" placeholder=\"John\">
            <p>Login / Pseudo</p>
            <input type=\"text\" name=\"login\" placeholder=\"jd2026\">
            <p>Mail</p>
            <input type=\"email\" name=\"email\" placeholder=\"johndoe@gmail.com\">
            <p>Téléphone</p>
            <input type=\"tel\" name=\"telephone\" placeholder=\"01 02 03 04 05\">
            <p>Mot de passe</p>
            <input type=\"password\" name=\"password\" placeholder=\"12345\">
            <button type=\"submit\">Envoyer</button>
        </form> 
    </div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "signin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  63 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Doctolibre</title>
    <link rel=\"stylesheet\" href=\"/css/style.css\">
</head>
<body>

    <div class=\"head\">   
        <u><b><h1>Page d'inscription</h1></b></u>
        <u><h2>Site Doctolibre</h2></u>
        {# templates/signin.html.twig #}
        <i><h3>It's {{ hour }}</h3></i>
    </div>    

    <div class=\"main\">

        <u><h2>Je m'inscris <h2></u>
        <form method=\"post\">
            <p>Nom</p>
            <input type=\"text\" name=\"name\" placeholder=\"Doe\">
            <p>Prenom</p>
            <input type=\"text\" name=\"first_name\" placeholder=\"John\">
            <p>Login / Pseudo</p>
            <input type=\"text\" name=\"login\" placeholder=\"jd2026\">
            <p>Mail</p>
            <input type=\"email\" name=\"email\" placeholder=\"johndoe@gmail.com\">
            <p>Téléphone</p>
            <input type=\"tel\" name=\"telephone\" placeholder=\"01 02 03 04 05\">
            <p>Mot de passe</p>
            <input type=\"password\" name=\"password\" placeholder=\"12345\">
            <button type=\"submit\">Envoyer</button>
        </form> 
    </div>

</body>
</html>
", "signin.html.twig", "/home/lucilegl/Coding/Doctolibre/templates/signin.html.twig");
    }
}
