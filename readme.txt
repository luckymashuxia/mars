MX 6.0ʹ��˵��

һ��ƽ̨����
1.Windows ƽ̨��
IIS/Apache/Nginx + PHP5.4���ϰ汾��ע�⣺PHP5.4dev�汾��PHP6����֧�֣� + MySQL4/5

2.Linux/Unix ƽ̨
Apache + PHP5 + MySQL5

��������װʹ��
1.������Ŀ¼���ڻ����ϴ�����վ��Ŀ¼
2.thinkphp5.0�Ĳ�������publicĿ¼��ΪwebĿ¼�������ݣ���������webĿ¼֮�⣬
thinkphp5.0Ĭ�ϵ�Ӧ������ļ�λ��public/index.php���������£�
// ����Ӧ��Ŀ¼
define('APP_PATH', __DIR__ . '/../application/');
// ���ؿ�������ļ�
require __DIR__ . '/../thinkphp/start.php';

3.��������ļ�Ϊpublic/index.php  �������,�޸�application��config.php ��$publicֵ ��Ӧ��ʽ��·��

����Ŀ¼˵��
project  Ӧ�ò���Ŀ¼
����application           Ӧ��Ŀ¼�������ã�
��  ����common             ����ģ��Ŀ¼���ɸ��ģ�
��  ����console            ��̨ģ��(�ɸ���)
��  ��  ����config.php      ģ�������ļ�
��  ��  ����common.php      ģ�麯���ļ�
��  ��  ����controller      ������Ŀ¼
��  ��  ����model           ģ��Ŀ¼
��  ��  ����view            ��ͼĿ¼
��  ��  ���� ...            �������Ŀ¼
��  ����home               ǰ̨Ŀ¼(�ɸ���)
��  ��  ����config.php      ģ�������ļ�
��  ��  ����common.php      ģ�麯���ļ�
��  ��  ����controller      ������Ŀ¼
��  ��  ����model           ģ��Ŀ¼
��  ��  ����view            ��ͼĿ¼
��  ��  ���� ...            �������Ŀ¼
��  ����command.php        �����й��������ļ�
��  ����common.php         Ӧ�ù������������ļ�
��  ����config.php         Ӧ�ã������������ļ�
��  ����database.php       ���ݿ������ļ�
��  ����tags.php           Ӧ����Ϊ��չ�����ļ�
��  ����route.php          ·�������ļ�
����extend                ��չ���Ŀ¼���ɶ��壩
����public                WEB ����Ŀ¼���������Ŀ¼��
��  ����static             ��̬��Դ���Ŀ¼(css,js,image)
��  ����index.php          Ӧ������ļ�
��  ����router.php         ���ٲ����ļ�
��  ����.htaccess          ���� apache ����д
����runtime               Ӧ�õ�����ʱĿ¼����д�������ã�
����vendor                ���������Ŀ¼��Composer��
����thinkphp              ���ϵͳĿ¼
��  ����lang               ���԰�Ŀ¼
��  ����library            ��ܺ������Ŀ¼
��  ��  ����think           Think ����Ŀ¼
��  ��  ����traits          ϵͳ Traits Ŀ¼
��  ����tpl                ϵͳģ��Ŀ¼
��  ����.htaccess          ���� apache ����д
��  ����.travis.yml        CI �����ļ�
��  ����base.php           ���������ļ�
��  ����composer.json      composer �����ļ�
��  ����console.php        ����̨����ļ�
��  ����convention.php     ���������ļ�
��  ����helper.php         ���ֺ����ļ�����ѡ��
��  ����LICENSE.txt        ��Ȩ˵���ļ�
��  ����phpunit.xml        ��Ԫ���������ļ�
��  ����README.md          README �ļ�
��  ����start.php          ��������ļ�
����build.php             �Զ����ɶ����ļ����ο���
����composer.json         composer �����ļ�
����LICENSE.txt           ��Ȩ˵���ļ�
����README.md             README �ļ�
����think                 ����������ļ�

�ġ�����
1.��̨��ർ���͹���ԱȨ��
2.�ϴ�ͼƬ����Ͷ�ͼƬ�����Ĵ���
3 ��Գ���Ա������ɹ���ģ��Ĵ���������
4 �б�ҳʹ��datatable��� 
5.����޸�ҳʹ��bootstrapValidator
6.����ʹ��sweetalert���
7.���ù���ʹ��bootstrap-editable��������ק����


�塢�����Դ
thinkphp5 �ٷ��ֲ�			���ص�ַ��http://www.kancloud.cn/manual/thinkphp5/118003