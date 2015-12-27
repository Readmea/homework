<html lang="en"><head>
    <meta charset="UTF-8">
    <title></title>
<style id="system" type="text/css">h1,h2,h3,h4,h5,h6,p,blockquote {    margin: 0;    padding: 0;}body {    font-family: "Helvetica Neue", Helvetica, "Hiragino Sans GB", Arial, sans-serif;    font-size: 13px;    line-height: 18px;    color: #737373;    margin: 10px 13px 10px 13px;}a {    color: #0069d6;}a:hover {    color: #0050a3;    text-decoration: none;}a img {    border: none;}p {    margin-bottom: 9px;}h1,h2,h3,h4,h5,h6 {    color: #404040;    line-height: 36px;}h1 {    margin-bottom: 18px;    font-size: 30px;}h2 {    font-size: 24px;}h3 {    font-size: 18px;}h4 {    font-size: 16px;}h5 {    font-size: 14px;}h6 {    font-size: 13px;}hr {    margin: 0 0 19px;    border: 0;    border-bottom: 1px solid #ccc;}blockquote {    padding: 13px 13px 21px 15px;    margin-bottom: 18px;    font-family:georgia,serif;    font-style: italic;}blockquote:before {    content:"C";    font-size:40px;    margin-left:-10px;    font-family:georgia,serif;    color:#eee;}blockquote p {    font-size: 14px;    font-weight: 300;    line-height: 18px;    margin-bottom: 0;    font-style: italic;}code, pre {    font-family: Monaco, Andale Mono, Courier New, monospace;}code {    background-color: #fee9cc;    color: rgba(0, 0, 0, 0.75);    padding: 1px 3px;    font-size: 12px;    -webkit-border-radius: 3px;    -moz-border-radius: 3px;    border-radius: 3px;}pre {    display: block;    padding: 14px;    margin: 0 0 18px;    line-height: 16px;    font-size: 11px;    border: 1px solid #d9d9d9;    white-space: pre-wrap;    word-wrap: break-word;}pre code {    background-color: #fff;    color:#737373;    font-size: 11px;    padding: 0;}@media screen and (min-width: 768px) {    body {        width: 748px;        margin:10px auto;    }}</style><style id="custom" type="text/css"></style></head>
<body marginheight="0"><h1>T1</h1>
<pre><code>    ip      :192.168.199.247
    子网掩码 :255.255.255.0
    外网ip   :113.251.169.236
    网关     :192.168.199.1 </code></pre>
<h1>T2</h1>
<pre><code>    DNS服务器  :192.168.199.1
    学校DNS    :202.202.32.34
    作用       :解析域名，指向ip</code></pre>
<h1>T3</h1>
<pre><code>    TCP         :两主机经过三次“对话”，建立连接，发送数据
    UDP         :不建立连接，直接发送数据包</code></pre>
<h1>T4</h1>
<pre><code>    ip是地址 
    ip协议是规范规则</code></pre>
<h1>T5</h1>
<pre><code>    TCP/IP：
        应用层      对应于OSI参考模型的高层，为用户提供所需要的各种服务
        传输层      对应于OSI参考模型的传输层，为应用层实体提供端到端的通信功能，保证了数据包的顺序传送及数据的完整性。
        网际互联层  对应于OSI参考模型的网络层，主要解决主机到主机的通信问题。
        网络接入层  对应于OSI参考模型中的物理层和数据链路，监视数据交换。</code></pre>
<h1>T6</h1>
<pre><code>    HTTPS vs HTTP
         http是超文本传输协议，信息是明文传输，https 则是具有安全性的ssl加密传输协议。
         http和https使用的是完全不同的连接方式用的端口也不一样,前者是80,后者是443。
         HTTPS协议是由SSL+HTTP协议构建的可进行加密传输、身份认证的网络协议 要比http协议安全。 
         https证书要花钱
    WSS vs WS
       相同点:均为 WebSocket 协议的 schema
       不同点:安全 vs 不安全</code></pre>
<h1>T7</h1>
<pre><code>    进程和线程的区别
    进程：一个应用程序在处理机上的一次执行过程，它是一个动态的概念
    线程：进程中的一部分，进程包含多个线程在运行

    区别：
    地址空间和其它资源：进程间相互独立，同一进程的各线程间共享。某进程内的线程在其它进程不可见。
    通信：进程间通信IPC，线程间可以直接读写进程数据段（如全局变量）来进行通信——需要进程同步和互斥手段的辅助，以保证数据的一致性。
    调度和切换：线程上下文切换比进程上下文切换要快得多。</code></pre>
<h1>T8</h1>
<pre><code>    并发：
    并发执行只是宏观上的。在操作系统的管理下，所有正在运行的进程轮流使用CPU，每个进程允许占用CPU的时间非常短，微观上一个cpu在同一时间一次还是只能执行一个进程。</code></pre>
<h1>T9</h1>
<pre><code>    LINUX：UNIX的改版
    和WINDOWS区别：
        1.免费...
        2.多任务多用户！
        3.Linux也具有图形界面
        4.网络功能强大
        5.开源~~
        6.开发功能强</code></pre>
<h1>T10</h1>
<pre><code>    redhat:使用人数多，资源多,稳定性好，适合服务器
    debian:BUG较多，适合桌面用户
    Ubuntu:Debian加强版。界面友好，容易上手，对硬件的支持非常全面，是最适合做桌面系统的Linux发行版本
    Gentoo:special：Portage包管理系统，适合定制</code></pre>
<h1>T11</h1>
<pre><code>    bash    csh     zsh
    ash     ksh</code></pre>
<h1>T12</h1>
<pre><code>    设置环境变量</code></pre>
<h1>T13</h1>
<pre><code>    定义时间变量
    决定select最多等待I/O操作完成多长时间</code></pre>
<h1>T14</h1>
<pre><code>    Swap对Linux,web服务器性能至关重要，节约空间
    对性能有很大的影响</code></pre>
<h1>T15</h1>
<pre><code>    65535</code></pre>
<h1>T16</h1>
<pre><code>    复制 y
    粘贴 p
    剪切 d</code></pre>
<h1>T17</h1>
<pre><code>    通过把SQL命令插入到Web表单提交或输入域名或页面请求的查询字符串，最终达到欺骗服务器执行恶意的SQL命令。具体来说，它是利用现有应用程序，将（恶意）的SQL命令注入到后台数据库引擎执行的能力，它可以通过在Web表单中输入（恶意）SQL语句得到一个存在安全漏洞的网站上的数据库    </code></pre>
<h1>T18</h1>
<pre><code>    Cross Site Scripting ：跨站脚本攻击

    往Web页面里插入恶意Script代码，当用户浏览该页之时，嵌入其中Web里面的Script代码会被执行，从而达到恶意攻击用户的特殊目的。</code></pre>
<h1>T19</h1>
<pre><code>    非关系型的数据库,NoSQL
    为了解决大规模数据集合多重数据种类带来的挑战，尤其是大数据应用难题。</code></pre>
<p>Edit By <a href="http://mahua.jser.me">MaHua</a>
Edit By <a href="http://mahua.jser.me">MaHua</a></p>
</body></html>