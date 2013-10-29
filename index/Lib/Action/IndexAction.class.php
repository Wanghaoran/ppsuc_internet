<?php
class IndexAction extends CommonAction {

  public function index(){
    $News = M('News');
    $result_news = $News -> field('id,title,addtime') -> order('addtime DESC') -> limit(10) -> select();
    $this -> assign('result_news', $result_news);
    $Course = M('Course');
    $result_courses = $Course -> field('id,name,addtime') -> order('addtime DESC') -> limit(3) -> select();
    $this -> assign('result_courses', $result_courses);
    $SchoolImage = M('SchoolImage');
    $result_image = $SchoolImage -> field('id,title,image') -> order('addtime DESC') -> limit(6) -> select();
    $this -> assign('result_image', $result_image);
    $Student = M('Student');
    $result_student = $Student -> field('id,title') -> select();
    $this -> assign('result_student', $result_student);
    $School = M('School');
    $result_school = $School -> field('id,title') -> select();
    $this -> assign('result_school', $result_school);
    $this -> display();
  }

  //关于我们
  public function aboutus(){
    $Abouts = M('Aboutus');
    $result = $Abouts -> field('title,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //招生专栏
  public function student(){
    $Student = M('Student');
    $result = $Student -> field('title,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //新生入学
  public function school(){
    $School = M('School');
    $result = $School -> field('title,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }



  //新闻动态 - 列表页
  public function newslist(){
    $News = M('News');
    import("ORG.Util.Page");// 导入分页类
    $count = $News -> count('id');
    $page = new Page($count, 10);
    $show = $page -> show();
    $result = $News -> field('id,title,content,addtime') -> order('addtime DESC') -> limit($page -> firstRow . ',' . $page -> listRows) -> select();
    $this -> assign('result', $result);
    $this -> assign('show', $show);
    $this -> display();
  }

  //新闻动态 - 详情页
  public function news(){
    $News = M('News');
    $result = $News -> field('title,content,addtime') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //教学网络
  public function map(){
    $this -> display();
  }

  //校园美景
  public function image(){
    $SchoolImage = M('SchoolImage');
    import("ORG.Util.Page");// 导入分页类
    $count = $SchoolImage -> count('id');
    $page = new Page($count, 9);
    $show = $page -> show();
    $result = $SchoolImage -> field('id,title,image') -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('show', $show);
    $this -> display();
  }

  //美景详情
  public function imageinfo(){
    $SchoolImage = M('SchoolImage');
    $result = $SchoolImage -> field('id,title,image,content,addtime') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //联系我们
  public function contactuss(){
    $this -> display();
  }

  //课程搜索
  public function sourcesearch(){
    $CourseCategory = M('CourseCategory');
    $where = array();
    $where['name'] = array('LIKE', '%' . $this -> _post('title') . '%');
    $result = $CourseCategory -> field('id,name,addtime,remark') -> where($where) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> display();
  }
}
