# learning-tasks

roman_numbers.php

Дано число X. Требуется перевести это число в римскую систему счисления.
ВХОДНЫЕ ДАННЫЕ
Дано число X в десятичной системе счисления (1  ≤  X  ≤  3999).
ВЫХОДНЫЕ ДАННЫЕ
Выведите X в римской системе счисления.
Примеры
4	IV
19	XIX
46	XLVI

Римские цифры - это особые знаки, используемые для записи десятичных разрядов и их половин. Для обозначения чисел римскими цифрами применяется 7 букв латинского алфавита:
I -1
V -5
X - 10
L - 50
C - 100
D - 500
M - 1000


for-in-arrays.php

Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:

    Массив
    Префикс

После префикса автоматически добавляется пробел.


change_of_elements.php

Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса. Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.  Параметры функции:      Массив     
Индекс  Если хотя бы одного из индексов не существует, функция возвращает исходный массив.


sequence.php

Реализуйте функцию isContinuousSequence, которая проверяет, является ли переданная последовательность целых чисел возрастающей непрерывно (не имеющей пропусков чисел). Например, последовательность [4, 5, 6, 7] — непрерывная, а [0, 
1, 3] — нет. Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел. Последовательность из одного числа не может считаться возрастающей.


calculateAverage.php

Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива. В случае пустого массива функция должна вернуть значение null (используйте в коде для этого guard expression)


findIndex.php

Реализуйте функцию findIndex, которая возвращает первый встретившийся индекс переданного элемента в случае, если элемент присутствует в массиве, и -1 в случае, если он отсутствует.


getSameParity.php

Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый, состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива. Если на вход функции передан пустой 
массив, то она должна вернуть пустой массив.


getIndexOfWarmestDay.php

У вас есть набор данных, описывающих изменение температуры воздуха в одном городе в течение нескольких суток. Данные представлены массивом, в котором каждый элемент — это массив, содержащий список температур в течение одних суток.
Реализуйте функцию getIndexOfWarmestDay, которая находит самый тёплый день (тот, в котором была зарегистрирована максимальная температура) и возвращает индекс этого дня в исходном массиве.
Подсказки      Если на вход поступил пустой массив, то функция должна вернуть null.     Если существует несколько дней с максимальной температурой, то функция возвращает индекс последнего из этих дней (то есть выбирается день с 
наибольшим индексом).


buildDefinitionList.php

Реализуйте функцию buildDefinitionList, которая генерирует html список определений (теги dl, dt и dd) и возвращает получившуюся строку. При отсутствии элементов в массиве функция возвращает пустую строку.


makeCensored.php

Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов в предложении на последовательность $#%! и возвращает полученную строку. Аргументы:      Текст     Набор стоп слов  Словом считается любая 
непрерывная последовательность символов, включая любые спецсимволы (без пробелов).


getSameCount.php

Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов для двух массивов. Аргументы:      Первый массив     Второй массив.



countUniqChars.php

Реализуйте функцию countUniqChars, которая получает на вход строку и считает, сколько символов (уникальных символов) использовано в этой строке. Например, в строке 'yy' всего один уникальный символ — y. А в строке '111yya!' — 
четыре уникальных символа: 1, y, a и !.  Задание необходимо выполнить без использования функции array_unique.



bubbleSort.php

Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку. Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.


checkIfBalanced.php

Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.


getIntersectionOfSortedArray.php
Реализуйте функцию getIntersectionOfSortedArray, которая принимает на вход два отсортированных массива и находит 
их пересечение.


getChunked.php

Реализуйте функцию getChunked, которая принимает на вход массив и число, задающее размер чанка (куска). Функция 
должна вернуть массив, состоящий из чанков указанной размерности. Попробуйте реализовать это упражнение без 
использования встроенной в PHP функции array_chunk. То есть вам нужно написать свою реализацию данной функции.


calcInPolishNotation.php

В данном упражнении необходимо реализовать стековую машину, то есть алгоритм, проводящий вычисления по обратной 
польской записи. Реализуйте функцию calcInPolishNotation, которая принимает массив, каждый элемент которого 
содержит число или знак операции (+, -, *, /). Функция должна вернуть результат вычисления по обратной польской 
записи.


getMirrorMatrix.php

Реализуйте функцию getMirrorMatrix, которая принимает двумерный массив (матрицу) и возвращает массив, изменённый 
таким образом, что правая половина матрицы становится зеркальной копией левой половины, симметричной относительно 
вертикальной оси матрицы. Для простоты условимся, что матрица всегда имеет чётное количество столбцов и 
количество столбцов всегда равно количеству строк.


generate.php

Напишите функцию generate, которая возвращает указанную строку треугольника паскаля в виде массива.


lengthOfLastWord.php

Реализуйте функцию lengthOfLastWord, которая возвращает длину последнего слова переданной на вход строки. Словом 
считается любая последовательность, не содержащая пробелов.

summaryRanges.php

Реализуйте функцию summaryRanges, которая находит в массиве непрерывные возрастающие последовательности чисел и 
возвращает массив с их перечислением.


hammingWeight.php

Реализуйте функцию hammingWeight, которая считает вес Хэмминга числа.


compareVersion.php

Реализуйте функцию compareVersion, которая сравнивает переданные версии version1 и version2. Если version1 > 
version2, то функция должна вернуть 1, если version1 < version2, то - -1, если же version1 = version2, то - 0.


longestLength.php

Реализуйте функцию longestLength принимающую на вход строку и возвращающую длину максимальной последовательности 
из неповторяющихся символов. Подстрока может состоять из одного символа. Например в строке qweqrty, можно 
выделить следующие подстроки: qwe, weqrty. Самой длинной будет weqrty.


bank-deposit.py

Васе на день рождения подарили сумму денег N. Вася очень хотел игровую приставку, которая стоит K, но ему может не хватить тех денег, которые подарили. Каждый месяц Васе дают M карманных денег, которые он может не тратить, а копить. Чтобы быстрее накопить, родители посоветовали Васе положить деньги в банк под проценты. Существуют два типа вклада в банке: А — без возможности пополнения под 10% в год (вклад можно открыть только один раз за весь срок накопления, начисление процентов в конце срока вклада за число полных месяцев), B — с возможностью пополнения, под 7% в год (начисление процентов ежемесячно). Минимальный срок вклада — 1 месяц. Сколько месяцев Вася будет копить на приставку, и какой вклад он должен выбрать.


rowSumOddNumbers.php

Sum of odd numbers
Given the triangle of consecutive odd numbers:               1           3     5        7     9    11    13    15    17    19 21    23    25    27    29 ...  Calculate the row sums of this triangle from the row index (starting at 
index 1) e.g.:  rowSumOddNumbers(1); // 1 rowSumOddNumbers(2); // 3 + 5 = 8


Evenorodd.php

Task:

Given an vector of numbers, determine whether the sum of all of the numbers is odd or even.

Give your answer as a String matching 'odd' or 'even'.

If the input array is empty consider it as: [0] (array with a zero).
Example:

odd_or_even(vec![0]) returns "even"
odd_or_even(vec![0, 1, 4]) returns "odd"
odd_or_even(vec![0, -1, -5]) returns "even"


getIn.php

Реализуйте функцию getIn, которая извлекает из массива (который может быть любой глубины вложенности) значение по 
указанным ключам. Аргументы:

    Исходный массив
    Массив ключей, по которым ведется поиск значения

В случае, когда добраться до значения невозможно, возвращается null.



pick.php

Реализуйте функцию pick, которая извлекает из переданного массива все элементы по указанным ключам и возвращает 
новый массив. Аргументы:

    Исходный массив
    Массив ключей, по которым должны быть выбраны элементы (ключ и значение) из исходного массива, и на основе 
выбранных данных сформирован новый массив


genDiff.php

Реализуйте функцию genDiff, которая сравнивает два ассоциативных массива и возвращает результат сравнения в виде 
ассоциативного массива. Ключами результирующего массива будут все ключи из двух входящих массивов, каждому из 
которых должно соответствовать одно из четырёх значений: added, deleted, changed или unchanged.

Аргументы:

    Ассоциативный массив
    Ассоциативный массив

Расшифровка:

    added — ключ отсутствовал в первом массиве, но был добавлен во второй
    deleted — ключ был в первом массиве, но отсутствует во втором
    changed — ключ присутствовал и в первом и во втором массиве, но значения отличаются
    unchanged — ключ присутствовал и в первом и во втором массиве с одинаковыми значениями



getSortedNames.php

Реализуйте функцию getSortedNames, которая принимает на вход список пользователей, извлекает их имена, сортирует 
и возвращает отсортированный список имен.


Dictionaryonhashtable.php
Реализуйте набор функций, для работы со словарём, построенным на хеш-таблице. Для простоты, наша реализация не 
поддерживает разрешение коллизий.

    make() — создаёт новый словарь
    set($map, $key, $value) — устанавливает в словарь значение по ключу. Работает и для создания и для изменения. 
Функция возвращает true, если удалось установить значение. При возникновении коллизии, функция никак не меняет 
словарь и возвращает false.
    get($map, $key, $defaultValue = null) — читает в словаре значение по ключу. Параметр $defaultValue — 
значение, которое функция возвращает, если в словаре нет ключа (по умолчанию равно null).

Функции set и get принимают первым параметром словарь. Передача идет по ссылке, поэтому set может изменить его 
напрямую.

Для полноценного погружения в тему, считаем, что массив в PHP может использоваться только как индексированный 
массив.



wordsCount.php

Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении. Результатом функции 
является ассоциативный массив, в ключах которого слова из исходного текста, а значения это количество повторений.


fromPairs.php

Реализуйте функцию fromPairs, которая принимает на вход массив, состоящий из массивов-пар, и возвращает 
ассоциативный массив, полученный из этих пар.
Примечания

    Если при конструировании объекта попадаются совпадающие ключи, то берётся ключ из последнего массива-пары


buildQueryString.php

Реализуйте функцию buildQueryString, которая принимает на вход список параметров и возвращает сформированный 
query string из этих параметров:

<?php

buildQueryString(['per' => 10, 'page' => 1 ]);
// → page=1&per=10

Имена параметров в выходной строке должны располагаться в алфавитном порядке (то есть их нужно отсортировать).


findWhere.php

Реализуйте функцию findWhere, которая принимает на вход массив (элементы которого - ассоциативные массивы) и пары 
ключ-значение (тоже в виде массива), а возвращает первый элемент исходного массива, значения которого 
соответствуют переданным парам (всем переданным). Если совпадений не было, то функция должна вернуть null.


toRna.php

ДНК и РНК это последовательности нуклеотидов.

Четыре нуклеотида в ДНК это аденин (A), цитозин (C), гуанин (G) и тимин (T).

Четыре нуклеотида в РНК это аденин (A), цитозин (C), гуанин (G) и урацил (U).

Цепь РНК составляется на основе цепи ДНК последовательной заменой каждого нуклеотида:

    G -> C
    C -> G
    T -> A
    A -> U

src/Solution.php

Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает соответствующую цепь РНК (совершает 
транскрипцию РНК).


sayPrimeOrNot.php

Реализуйте функцию sayPrimeOrNot, которая проверяет переданное число на простоту и печатает на экран yes или no.
Примеры использования

<?php
sayPrimeOrNot(5); // yes
sayPrimeOrNot(4); // no

Подсказки

Цель этой задачи — научиться отделять чистый код от кода с побочными эффектами.

Для этого выделите процесс определения того, является ли число простым, в отдельную функцию, возвращающую 
логическое значение. Это функция, с помощью которой мы отделяем чистый код от кода, интерпретирующего логическое 
значение (как 'yes' или 'no') и делающего побочный эффект (печать на экран).


average.php

Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов. Если функции не 
передать ни одного аргумента, то она должна вернуть null.


union.php

Реализуйте функцию union(...$arrays), которая находит объединение всех переданных массивов. Функция принимает на 
вход от одного массива и больше. Ключи исходных массивов не сохраняются (т.е. все значения итогового массива 
заново индексируются: 0, 1, 2, ...).
