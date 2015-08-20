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


## Anwendung

Das Plugin stellt dir den Shortcode [[code]] zur Verfügung, den du in deinen Seiteninhalten nutzen kannst. Als einzigen
Parameter wird die Programmiersprache verlangt:

    [[code javascript]
    alert("Hello Herbie!");
    [/code]]

## Beispiele

**Javascript**

    [[code javascript]
    var i=10;
    for ( i = 1; i < foo; i++ )
    {
      alert i;
    }
    [/code]]

**PHP**

    [[code php]
    $foo = 45;
    for ( $i = 1; $i < $foo; $i++ )
    {
      echo "$foo<br>";
      --$foo;
    };
    [/code]]

**Python**

    [[code python]
    def main():
        print "Hallo Welt!"

    if __name__ == '__main__':
        main()
    [/code]]


## Demo

<http://getherbie.org/dokumentation/plugins/highlight>
