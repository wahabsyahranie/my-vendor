<?php

namespace MyVendor\InspiringQuotes;

use Illuminate\Support\Collection;
use Illuminate\Support\Stringable;


class InspiringCustom
{
    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     *
     * May McGinnis always control the board. #LaraconUS2015
     *
     * RIP Charlie - Feb 6, 2018
     *
     * @return string
     */
    public static function quote()
    {
        return static::formatForConsole(static::quotes()->random());
    }

    /**
     * Get the collection of inspiring quotes.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function quotes()
    {
        return new Collection([
            'Langkah pertama sangatlah berarti, jika kau takut maka melangkahlah. - Emcy',
            'Apa pun yang bisa dibayangkan dan diyakini pasti bisa diraih. - TGR',
            'Satu satunya batasan pada pikiran adalah batasan yang kita akui. - TGR',
            'Orang yang mudah menyerah tidak akan menjadi pemenang dan pemenang tidak pernah menyerah. - TGR',
            'Semua hambatan, semua kegagalan, dan semua kepiluan membawa benih keuntungan yang setara atau bahkan lebih besar. - TGR',
            'Kebahagiaan didapat dari melakukan. Bukan sekedar memiliki. - TGR',
            'Katakan pada dunia apa yang hendak anda lakukan, tapi pertama-tama tunjukkan hal itu. - TGR',
            'Kesombongan adalah kabut yang menyelubungi karakter sejati seseorang sampai ia pun tak bisa mengenalinya. Hal itu memperlemah kemampuannya sekaligus memperkuat kelemahannya. - TGR',
            'Tidak ada orang yang mencapai kesukseskan besar tanpa pengorbanan pribadi. - TGR',
            'Tangga kesuksesan tidak pernah penuh di puncak. - TGR',
            'Lebih banyak emas ditambang dari pikiran manusia daripada dari permukaan bumi. - TGR',
            'Kesuksesan tak perlu penjelasan, kegagalan tak bisa dijelaskan dengan dalih. - TGR',
            'Pencapaian besar biasanya lahir dari pengorbanan besar, dan tak pernah dari keegoisan. - TGR',
            'Setengah perjalanan meraih keinginan kita adalah mengetahui apa yang kita inginkan dalam hidup. - TGR',
        ]);
    }

    /**
     * Formats the given quote for a pretty console output.
     *
     * @param  string  $quote
     * @return string
     */
    protected static function formatForConsole($quote)
    {
        [$text, $author] = (new Stringable($quote))->explode('-');

        return sprintf(
            "\n  <options=bold>“ %s ”</>\n  <fg=gray>— %s</>\n",
            trim($text),
            trim($author),
        );
    }
}