# Herbie Highlight Plugin

`Highlight` ist ein [Herbie](http://github.com/getherbie/herbie) Plugin, das den leistungsfähgien Code 
Syntaxhighlighter [GeSHi](http://qbnz.com/highlighter/) in deine Website einbindet.


## Installation

Das Plugin installierst du via Composer.

	$ composer require getherbie/plugin-highlight

Danach aktivierst du das Plugin in der Konfigurationsdatei.

    plugins:
        enable:
            - highlight


## Konfiguration

Unter `plugins.config.highlight` stehen dir die folgenden Optionen zur Verfügung:

    # enable shortcode
    shortcode: true
    
    # enable twig tag
    twig: false


## Anwendung

Das Plugin stellt dir den Shortcode [code] zur Verfügung, den du in deinen Seiteninhalten nutzen kannst. Als einzigen
Parameter wird die Programmiersprache verlangt:

    [code javascript]
        alert("Hello Herbie!");
    [/code]

Mit dem Aktivieren des Twig-Tags kannst du Gist-Schnipsel auch in Layoutdateien einsetzen:
     
    {% code javascript %}
        alert("Hello Herbie!");
    {% endcode %}     


## Unterstützung

Von GeSHi werden die folgenden Sprachen unterstützt (in alphabetischer Reihenfolge):

4cs, 6502acme, 6502kickass, 6502tasm, 68000devpac, abap, actionscript, actionscript3, ada, aimms, algol68, apache, 
applescript, apt_sources, arm, asm, asp, asymptote, autoconf, autohotkey, autoit, avisynth, awk, bascomavr, bash, 
basic4gl, batch, bf, bibtex, blitzbasic, bnf, boo, c, c_loadrunner, c_mac, c_winapi, caddcl, cadlisp, cfdg, cfm, 
chaiscript, chapel, cil, clojure, cmake, cobol, coffeescript, cpp, cpp-qt, cpp-winapi, csharp, css, cuesheet, d, 
dart, dcl, dcpu16, dcs, delphi, diff, div, dos, dot, e, ecmascript, eiffel, email, epc, erlang, euphoria, ezt, f1, 
falcon, fo, fortran, freebasic, freeswitch, fsharp, gambas, gdb, genero, genie, gettext, glsl, gml, gnuplot, go, 
groovy, gwbasic, haskell, haxe, hicest, hq9plus, html4strict, html5, icon, idl, ini, inno, intercal, io, ispfpanel, 
j, java, java5, javascript, jcl, jquery, kixtart, klonec, klonecpp, latex, lb, ldif, lisp, llvm, locobasic, logtalk, 
lolcode, lotusformulas, lotusscript, lscript, lsl2, lua, m68k, magiksf, make, mapbasic, matlab, mirc, mmix, modula2, 
modula3, mpasm, mxml, mysql, nagios, netrexx, newlisp, nginx, nsis, oberon2, objc, objeck, ocaml, ocaml-brief, octave, 
oobas, oorexx, oracle8, oracle11, oxygene, oz, parasail, parigp, pascal, pcre, per, perl, perl6, pf, php, php-brief, 
pic16, pike, pixelbender, pli, plsql, postgresql, povray, powerbuilder, powershell, proftpd, progress, prolog, 
properties, providex, purebasic, pycon, pys60, python, q, qbasic, racket, rails, rbs, rebol, reg, rexx, robots, 
rpmspec, rsplus, ruby, rust, sas, sass, scala, scheme, scilab, scl, sdlbasic, smalltalk, smarty, spark, sparql, sql, 
stonescript, systemverilog, tcl, teraterm, text, thinbasic, tsql, twig, typoscript, unicon, upc, urbi, uscript, vala, 
vb, vbnet, vbscript, vedit, verilog, vhdl, vim, visualfoxpro, visualprolog, whitespace, whois, winbatch, xbasic, xml, 
xojo, xorg_conf, xpp, yaml, z80, zxbasic

