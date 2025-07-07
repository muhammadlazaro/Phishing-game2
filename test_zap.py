from zapv2 import ZAPv2
import time

api_key = '92j7sfl7otefrl2b6ralqd9dl4'
target = 'http://testphp.vulnweb.com'  # Ganti targetmu

# Koneksikan ke ZAP
zap = ZAPv2(apikey=api_key, proxies={'http': 'http://127.0.0.1:8481', 'https': 'http://127.0.0.1:8481'})

print('ZAP Version:', zap.core.version)

# Spidering
print('Spider target...')
scan_id = zap.spider.scan(target)
time.sleep(2)

while int(zap.spider.status(scan_id)) < 100:
    print('Spider progress %: ' + zap.spider.status(scan_id))
    time.sleep(2)

print('Spider completed.')

# Active Scan
print('Active scanning target...')
ascan_id = zap.ascan.scan(target)
time.sleep(2)

while int(zap.ascan.status(ascan_id)) < 100:
    print('Scan progress %: ' + zap.ascan.status(ascan_id))
    time.sleep(5)

print('Active scan completed.')

# Get HTML report
report = zap.core.htmlreport()
with open('zap_report.html', 'w', encoding='utf-8') as f:
    f.write(report)

print('Report saved to zap_report.html')
