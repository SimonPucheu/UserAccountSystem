<?php
namespace ISO;
//3166
const countries = [["name"=>"Afghanistan","alpha2"=>"af","code"=>4],["name"=>"Åland Islands","alpha2"=>"ax","code"=>248],["name"=>"Albania","alpha2"=>"al","code"=>8],["name"=>"Algeria","alpha2"=>"dz","code"=>12],["name"=>"American Samoa","alpha2"=>"as","code"=>16],["name"=>"Andorra","alpha2"=>"ad","code"=>20],["name"=>"Angola","alpha2"=>"ao","code"=>24],["name"=>"Anguilla","alpha2"=>"ai","code"=>660],["name"=>"Antarctica","alpha2"=>"aq","code"=>10],["name"=>"Antigua and Barbuda","alpha2"=>"ag","code"=>28],["name"=>"Argentina","alpha2"=>"ar","code"=>32],["name"=>"Armenia","alpha2"=>"am","code"=>51],["name"=>"Aruba","alpha2"=>"aw","code"=>533],["name"=>"Australia","alpha2"=>"au","code"=>36],["name"=>"Austria","alpha2"=>"at","code"=>40],["name"=>"Azerbaijan","alpha2"=>"az","code"=>31],["name"=>"Bahamas","alpha2"=>"bs","code"=>44],["name"=>"Bahrain","alpha2"=>"bh","code"=>48],["name"=>"Bangladesh","alpha2"=>"bd","code"=>50],["name"=>"Barbados","alpha2"=>"bb","code"=>52],["name"=>"Belarus","alpha2"=>"by","code"=>112],["name"=>"Belgium","alpha2"=>"be","code"=>56],["name"=>"Belize","alpha2"=>"bz","code"=>84],["name"=>"Benin","alpha2"=>"bj","code"=>204],["name"=>"Bermuda","alpha2"=>"bm","code"=>60],["name"=>"Bhutan","alpha2"=>"bt","code"=>64],["name"=>"Bolivia (Plurinational State of)","alpha2"=>"bo","code"=>68],["name"=>"Bonaire, Sint Eustatius and Saba","alpha2"=>"bq","code"=>535],["name"=>"Bosnia and Herzegovina","alpha2"=>"ba","code"=>70],["name"=>"Botswana","alpha2"=>"bw","code"=>72],["name"=>"Bouvet Island","alpha2"=>"bv","code"=>74],["name"=>"Brazil","alpha2"=>"br","code"=>76],["name"=>"British Indian Ocean Territory","alpha2"=>"io","code"=>86],["name"=>"Brunei Darussalam","alpha2"=>"bn","code"=>96],["name"=>"Bulgaria","alpha2"=>"bg","code"=>100],["name"=>"Burkina Faso","alpha2"=>"bf","code"=>854],["name"=>"Burundi","alpha2"=>"bi","code"=>108],["name"=>"Cabo Verde","alpha2"=>"cv","code"=>132],["name"=>"Cambodia","alpha2"=>"kh","code"=>116],["name"=>"Cameroon","alpha2"=>"cm","code"=>120],["name"=>"Canada","alpha2"=>"ca","code"=>124],["name"=>"Cayman Islands","alpha2"=>"ky","code"=>136],["name"=>"Central African Republic","alpha2"=>"cf","code"=>140],["name"=>"Chad","alpha2"=>"td","code"=>148],["name"=>"Chile","alpha2"=>"cl","code"=>152],["name"=>"China","alpha2"=>"cn","code"=>156],["name"=>"Christmas Island","alpha2"=>"cx","code"=>162],["name"=>"Cocos (Keeling) Islands","alpha2"=>"cc","code"=>166],["name"=>"Colombia","alpha2"=>"co","code"=>170],["name"=>"Comoros","alpha2"=>"km","code"=>174],["name"=>"Congo","alpha2"=>"cg","code"=>178],["name"=>"Congo, Democratic Republic of the","alpha2"=>"cd","code"=>180],["name"=>"Cook Islands","alpha2"=>"ck","code"=>184],["name"=>"Costa Rica","alpha2"=>"cr","code"=>188],["name"=>"Côte d'Ivoire","alpha2"=>"ci","code"=>384],["name"=>"Croatia","alpha2"=>"hr","code"=>191],["name"=>"Cuba","alpha2"=>"cu","code"=>192],["name"=>"Curaçao","alpha2"=>"cw","code"=>531],["name"=>"Cyprus","alpha2"=>"cy","code"=>196],["name"=>"Czechia","alpha2"=>"cz","code"=>203],["name"=>"Denmark","alpha2"=>"dk","code"=>208],["name"=>"Djibouti","alpha2"=>"dj","code"=>262],["name"=>"Dominica","alpha2"=>"dm","code"=>212],["name"=>"Dominican Republic","alpha2"=>"do","code"=>214],["name"=>"Ecuador","alpha2"=>"ec","code"=>218],["name"=>"Egypt","alpha2"=>"eg","code"=>818],["name"=>"El Salvador","alpha2"=>"sv","code"=>222],["name"=>"Equatorial Guinea","alpha2"=>"gq","code"=>226],["name"=>"Eritrea","alpha2"=>"er","code"=>232],["name"=>"Estonia","alpha2"=>"ee","code"=>233],["name"=>"Eswatini","alpha2"=>"sz","code"=>748],["name"=>"Ethiopia","alpha2"=>"et","code"=>231],["name"=>"Falkland Islands (Malvinas)","alpha2"=>"fk","code"=>238],["name"=>"Faroe Islands","alpha2"=>"fo","code"=>234],["name"=>"Fiji","alpha2"=>"fj","code"=>242],["name"=>"Finland","alpha2"=>"fi","code"=>246],["name"=>"France","alpha2"=>"fr","code"=>250],["name"=>"French Guiana","alpha2"=>"gf","code"=>254],["name"=>"French Polynesia","alpha2"=>"pf","code"=>258],["name"=>"French Southern Territories","alpha2"=>"tf","code"=>260],["name"=>"Gabon","alpha2"=>"ga","code"=>266],["name"=>"Gambia","alpha2"=>"gm","code"=>270],["name"=>"Georgia","alpha2"=>"ge","code"=>268],["name"=>"Germany","alpha2"=>"de","code"=>276],["name"=>"Ghana","alpha2"=>"gh","code"=>288],["name"=>"Gibraltar","alpha2"=>"gi","code"=>292],["name"=>"Greece","alpha2"=>"gr","code"=>300],["name"=>"Greenland","alpha2"=>"gl","code"=>304],["name"=>"Grenada","alpha2"=>"gd","code"=>308],["name"=>"Guadeloupe","alpha2"=>"gp","code"=>312],["name"=>"Guam","alpha2"=>"gu","code"=>316],["name"=>"Guatemala","alpha2"=>"gt","code"=>320],["name"=>"Guernsey","alpha2"=>"gg","code"=>831],["name"=>"Guinea","alpha2"=>"gn","code"=>324],["name"=>"Guinea-Bissau","alpha2"=>"gw","code"=>624],["name"=>"Guyana","alpha2"=>"gy","code"=>328],["name"=>"Haiti","alpha2"=>"ht","code"=>332],["name"=>"Heard Island and McDonald Islands","alpha2"=>"hm","code"=>334],["name"=>"Holy See","alpha2"=>"va","code"=>336],["name"=>"Honduras","alpha2"=>"hn","code"=>340],["name"=>"Hong Kong","alpha2"=>"hk","code"=>344],["name"=>"Hungary","alpha2"=>"hu","code"=>348],["name"=>"Iceland","alpha2"=>"is","code"=>352],["name"=>"India","alpha2"=>"in","code"=>356],["name"=>"Indonesia","alpha2"=>"id","code"=>360],["name"=>"Iran (Islamic Republic of)","alpha2"=>"ir","code"=>364],["name"=>"Iraq","alpha2"=>"iq","code"=>368],["name"=>"Ireland","alpha2"=>"ie","code"=>372],["name"=>"Isle of Man","alpha2"=>"im","code"=>833],["name"=>"Israel","alpha2"=>"il","code"=>376],["name"=>"Italy","alpha2"=>"it","code"=>380],["name"=>"Jamaica","alpha2"=>"jm","code"=>388],["name"=>"Japan","alpha2"=>"jp","code"=>392],["name"=>"Jersey","alpha2"=>"je","code"=>832],["name"=>"Jordan","alpha2"=>"jo","code"=>400],["name"=>"Kazakhstan","alpha2"=>"kz","code"=>398],["name"=>"Kenya","alpha2"=>"ke","code"=>404],["name"=>"Kiribati","alpha2"=>"ki","code"=>296],["name"=>"Korea (Democratic People's Republic of)","alpha2"=>"kp","code"=>408],["name"=>"Korea, Republic of","alpha2"=>"kr","code"=>410],["name"=>"Kuwait","alpha2"=>"kw","code"=>414],["name"=>"Kyrgyzstan","alpha2"=>"kg","code"=>417],["name"=>"Lao People's Democratic Republic","alpha2"=>"la","code"=>418],["name"=>"Latvia","alpha2"=>"lv","code"=>428],["name"=>"Lebanon","alpha2"=>"lb","code"=>422],["name"=>"Lesotho","alpha2"=>"ls","code"=>426],["name"=>"Liberia","alpha2"=>"lr","code"=>430],["name"=>"Libya","alpha2"=>"ly","code"=>434],["name"=>"Liechtenstein","alpha2"=>"li","code"=>438],["name"=>"Lithuania","alpha2"=>"lt","code"=>440],["name"=>"Luxembourg","alpha2"=>"lu","code"=>442],["name"=>"Macao","alpha2"=>"mo","code"=>446],["name"=>"Madagascar","alpha2"=>"mg","code"=>450],["name"=>"Malawi","alpha2"=>"mw","code"=>454],["name"=>"Malaysia","alpha2"=>"my","code"=>458],["name"=>"Maldives","alpha2"=>"mv","code"=>462],["name"=>"Mali","alpha2"=>"ml","code"=>466],["name"=>"Malta","alpha2"=>"mt","code"=>470],["name"=>"Marshall Islands","alpha2"=>"mh","code"=>584],["name"=>"Martinique","alpha2"=>"mq","code"=>474],["name"=>"Mauritania","alpha2"=>"mr","code"=>478],["name"=>"Mauritius","alpha2"=>"mu","code"=>480],["name"=>"Mayotte","alpha2"=>"yt","code"=>175],["name"=>"Mexico","alpha2"=>"mx","code"=>484],["name"=>"Micronesia (Federated States of)","alpha2"=>"fm","code"=>583],["name"=>"Moldova, Republic of","alpha2"=>"md","code"=>498],["name"=>"Monaco","alpha2"=>"mc","code"=>492],["name"=>"Mongolia","alpha2"=>"mn","code"=>496],["name"=>"Montenegro","alpha2"=>"me","code"=>499],["name"=>"Montserrat","alpha2"=>"ms","code"=>500],["name"=>"Morocco","alpha2"=>"ma","code"=>504],["name"=>"Mozambique","alpha2"=>"mz","code"=>508],["name"=>"Myanmar","alpha2"=>"mm","code"=>104],["name"=>"Namibia","alpha2"=>"na","code"=>516],["name"=>"Nauru","alpha2"=>"nr","code"=>520],["name"=>"Nepal","alpha2"=>"np","code"=>524],["name"=>"Netherlands","alpha2"=>"nl","code"=>528],["name"=>"New Caledonia","alpha2"=>"nc","code"=>540],["name"=>"New Zealand","alpha2"=>"nz","code"=>554],["name"=>"Nicaragua","alpha2"=>"ni","code"=>558],["name"=>"Niger","alpha2"=>"ne","code"=>562],["name"=>"Nigeria","alpha2"=>"ng","code"=>566],["name"=>"Niue","alpha2"=>"nu","code"=>570],["name"=>"Norfolk Island","alpha2"=>"nf","code"=>574],["name"=>"North Macedonia","alpha2"=>"mk","code"=>807],["name"=>"Northern Mariana Islands","alpha2"=>"mp","code"=>580],["name"=>"Norway","alpha2"=>"no","code"=>578],["name"=>"Oman","alpha2"=>"om","code"=>512],["name"=>"Pakistan","alpha2"=>"pk","code"=>586],["name"=>"Palau","alpha2"=>"pw","code"=>585],["name"=>"Palestine, State of","alpha2"=>"ps","code"=>275],["name"=>"Panama","alpha2"=>"pa","code"=>591],["name"=>"Papua New Guinea","alpha2"=>"pg","code"=>598],["name"=>"Paraguay","alpha2"=>"py","code"=>600],["name"=>"Peru","alpha2"=>"pe","code"=>604],["name"=>"Philippines","alpha2"=>"ph","code"=>608],["name"=>"Pitcairn","alpha2"=>"pn","code"=>612],["name"=>"Poland","alpha2"=>"pl","code"=>616],["name"=>"Portugal","alpha2"=>"pt","code"=>620],["name"=>"Puerto Rico","alpha2"=>"pr","code"=>630],["name"=>"Qatar","alpha2"=>"qa","code"=>634],["name"=>"Réunion","alpha2"=>"re","code"=>638],["name"=>"Romania","alpha2"=>"ro","code"=>642],["name"=>"Russian Federation","alpha2"=>"ru","code"=>643],["name"=>"Rwanda","alpha2"=>"rw","code"=>646],["name"=>"Saint Barthélemy","alpha2"=>"bl","code"=>652],["name"=>"Saint Helena, Ascension and Tristan da Cunha","alpha2"=>"sh","code"=>654],["name"=>"Saint Kitts and Nevis","alpha2"=>"kn","code"=>659],["name"=>"Saint Lucia","alpha2"=>"lc","code"=>662],["name"=>"Saint Martin (French part)","alpha2"=>"mf","code"=>663],["name"=>"Saint Pierre and Miquelon","alpha2"=>"pm","code"=>666],["name"=>"Saint Vincent and the Grenadines","alpha2"=>"vc","code"=>670],["name"=>"Samoa","alpha2"=>"ws","code"=>882],["name"=>"San Marino","alpha2"=>"sm","code"=>674],["name"=>"Sao Tome and Principe","alpha2"=>"st","code"=>678],["name"=>"Saudi Arabia","alpha2"=>"sa","code"=>682],["name"=>"Senegal","alpha2"=>"sn","code"=>686],["name"=>"Serbia","alpha2"=>"rs","code"=>688],["name"=>"Seychelles","alpha2"=>"sc","code"=>690],["name"=>"Sierra Leone","alpha2"=>"sl","code"=>694],["name"=>"Singapore","alpha2"=>"sg","code"=>702],["name"=>"Sint Maarten (Dutch part)","alpha2"=>"sx","code"=>534],["name"=>"Slovakia","alpha2"=>"sk","code"=>703],["name"=>"Slovenia","alpha2"=>"si","code"=>705],["name"=>"Solomon Islands","alpha2"=>"sb","code"=>90],["name"=>"Somalia","alpha2"=>"so","code"=>706],["name"=>"South Africa","alpha2"=>"za","code"=>710],["name"=>"South Georgia and the South Sandwich Islands","alpha2"=>"gs","code"=>239],["name"=>"South Sudan","alpha2"=>"ss","code"=>728],["name"=>"Spain","alpha2"=>"es","code"=>724],["name"=>"Sri Lanka","alpha2"=>"lk","code"=>144],["name"=>"Sudan","alpha2"=>"sd","code"=>729],["name"=>"Suriname","alpha2"=>"sr","code"=>740],["name"=>"Svalbard and Jan Mayen","alpha2"=>"sj","code"=>744],["name"=>"Sweden","alpha2"=>"se","code"=>752],["name"=>"Switzerland","alpha2"=>"ch","code"=>756],["name"=>"Syrian Arab Republic","alpha2"=>"sy","code"=>760],["name"=>"Taiwan, Province of China","alpha2"=>"tw","code"=>158],["name"=>"Tajikistan","alpha2"=>"tj","code"=>762],["name"=>"Tanzania, United Republic of","alpha2"=>"tz","code"=>834],["name"=>"Thailand","alpha2"=>"th","code"=>764],["name"=>"Timor-Leste","alpha2"=>"tl","code"=>626],["name"=>"Togo","alpha2"=>"tg","code"=>768],["name"=>"Tokelau","alpha2"=>"tk","code"=>772],["name"=>"Tonga","alpha2"=>"to","code"=>776],["name"=>"Trinidad and Tobago","alpha2"=>"tt","code"=>780],["name"=>"Tunisia","alpha2"=>"tn","code"=>788],["name"=>"Turkey","alpha2"=>"tr","code"=>792],["name"=>"Turkmenistan","alpha2"=>"tm","code"=>795],["name"=>"Turks and Caicos Islands","alpha2"=>"tc","code"=>796],["name"=>"Tuvalu","alpha2"=>"tv","code"=>798],["name"=>"Uganda","alpha2"=>"ug","code"=>800],["name"=>"Ukraine","alpha2"=>"ua","code"=>804],["name"=>"United Arab Emirates","alpha2"=>"ae","code"=>784],["name"=>"United Kingdom of Great Britain and Northern Ireland","alpha2"=>"gb","code"=>826],["name"=>"United States of America","alpha2"=>"us","code"=>840],["name"=>"United States Minor Outlying Islands","alpha2"=>"um","code"=>581],["name"=>"Uruguay","alpha2"=>"uy","code"=>858],["name"=>"Uzbekistan","alpha2"=>"uz","code"=>860],["name"=>"Vanuatu","alpha2"=>"vu","code"=>548],["name"=>"Venezuela (Bolivarian Republic of)","alpha2"=>"ve","code"=>862],["name"=>"Viet Nam","alpha2"=>"vn","code"=>704],["name"=>"Virgin Islands (British)","alpha2"=>"vg","code"=>92],["name"=>"Virgin Islands (U.S.)","alpha2"=>"vi","code"=>850],["name"=>"Wallis and Futuna","alpha2"=>"wf","code"=>876],["name"=>"Western Sahara","alpha2"=>"eh","code"=>732],["name"=>"Yemen","alpha2"=>"ye","code"=>887],["name"=>"Zambia","alpha2"=>"zm","code"=>894],["name"=>"Zimbabwe","alpha2"=>"zw","code"=>716]];
?>