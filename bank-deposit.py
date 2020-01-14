gift, pocketMoney, cost = int(input()), int(input()), int(input())
# если денег не хватит
if pocketMoney == 0 and gift == 0:
    print(0)
    print(-1)
    exit()
# если денег уже достаточно
elif gift > cost:
    print(0)
    print(0)
    exit()
# если деньги копим
sumTenPercent = gift
sumSevenPercent = gift
term = 0
while sumSevenPercent < cost and sumTenPercent < cost:
    term += 1
    sumTenPercent += gift / 12 * 0.1 + pocketMoney
    sumSevenPercent += (pocketMoney + sumSevenPercent) * 0.07 / 12 + pocketMoney
print(term)
if sumSevenPercent >= cost and sumTenPercent >= cost:
    print(0)
elif sumSevenPercent >= cost:
    print('B')
else:
    print('A')
