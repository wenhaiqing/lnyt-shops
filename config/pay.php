<?php

return [
    'alipay' => [
        'app_id'         => '2016091400506408',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0TAsTKXJKl824XqrdEuPudSatKpnUIced+G8leFCUO3ccX4V+8iUGrzNTK420iYmwjabGVqZx1h2TI5bsBkraEfJvwplz5sH2DYsoal5u9TQ6KcVEKWgvprPukqAp4NHygwAaOB0ncUsv0UbIRPYavnIbeE5Mt4BDe664FcJMJAMjwDOr58FDZR0/lvSs4nabP3gYMRrLAGXBt3MzXcff0Cub2BqqlFGeQukjblhuAtaKt1P0z9pWCgtg440dbcwCF7li8hIBvNw34HRWajsSHZ6YsjjgvP8OgmGOpC1oCjaJiewr2wU5WpJJBpkd4Xkg6CDTOicQ+fgSlVBYu8E+QIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAr5p5mW+Js2DfndtjG2y6Mf9xxqizaqWU6+UqEQYxV20sNS5bvPuA+ertW1MWsSKzB/AoTQWcZT/i+Qx9KS93e/lYR7sSKRY4Blmzyxm3p2rnSqeAZFBiXi9BN/qmUHmE+jwkXSuRFrl6Xnm0TZK+sFzfcz3bmq2Lvja0T0ODK7EdJhut2TMJrAMlru/NnrygitYbqqWwetwYzi4jrQV0HGaHSHTouAo/hxb1HLgCmmwm9ZCXTmNHl4C38LnFu51LPRVH6qgSkoGxB1IPtObyKwg0lGI2J4N0touMVNqAmjabTFhiaFX2KkLHjORYRLQTqWh8Eb8niaLEFlk0xGzncwIDAQABAoIBAFXSq6d/yc7vg5rFBFT8+KtC6zpqbPWsY3I/GCYl3quZ4cdEFvXv/YMnfEXr/+UmzlUM3MV3/o3FgYqyveEJH95paOn11dRa1ZrU8HhM42NhbhUgdDGSz+C0O62+RNaD7afXCPa4Ojre/5144dQf6i6L1XGfQ9r/ApM+bTVoC42oPKjAmVeKQ2c5VPbLM416WFHW0wLXlbQHSztPoNJqKRzTDC0woDgEHZBNRCBTnmXieEwztCK94ypJLvyKmkCopFsCFINp3VB3fld2b3pWf0TXlarbdXoqP8o62alFxtQng0+MD6VifhpeJduJtXIbUeoNTs9pWEzi3K5GSdNK6tECgYEA4gCpSF+2oRGeTvB3st+Sk8lXn+zWpeeqX2NN+XEVAB0E6rmSJVEQzvYwtiIVVzaM6aQz/0TwupsjRWkqp//wbmGzveXkmbmHaWOaeNCsUtVzNNLR+VPPq6MzqfypfhXyk4XtmAp3blsD7XQKT9fcGXqgOagDX2CpxDqdeUBBVvcCgYEAxulNGkOSWTawgqlueo4z9k+4NuWK8NeaJPGfWD0ZK7SaJH4ot+t8yrvwvqeUTyUDE5NZCuK7SIVGHXWgjKi1ue64Km6pSGTztBsu1IHv9aSGctg8tpZ7W9SEXw8AJJC3IHKMfkxlgxZMAXyV7cutN5oo6fZSCxZjhuwwrZSpKGUCgYBq+L0nkIY0/s3bt14wwDn00Zw0CjofFORDehFyO+AgyZuGLofKOfCmxUiRLNjFCwDvpdUmwk7fRIcRV5HlKvN2i7Az9hiZ2oMJkyeOf9bQ7k81dYQFa3IkX38YuorPLzw+L2oiSPH2vgXB4ubum9GGDdDA+ZF/F5XDV6sptQw4SQKBgFaguKGdmBkehlUBcUoSsHKvWW0fHxmw7EL2sAz/3vx31UHbZ+RhvKGWpEyEM0Ucu3BFFdx1zlbRJC4kUl2wBCUL4E0qkLMktDZWOFj4lgcHNj7CCf8DHoppzZSQteE23WpWOPWwU+15QnTLS4ia0b+LdhIe4rBNed8C8lhGjD05AoGBAKTCv908j28p0zUpqO8srdIjEDpJOE891TnchJ06qiR2wP2gexAKMv3Yw7YIQ8pxdwHl3yt0npMooM8vD2+h8pvGDLJpGStPk1wFUm3CvmwfKEbBIQfmVRNmpr5rfW0AexirE/rtG3qef/dHUyIaaf+rYzGJ8E1TBJpRaIlcDB2u',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];