# Contributing to NGO-UMUS

First off, thank you for considering contributing to NGO-UMUS! It's people like you that make this project better for everyone.

## 📋 Table of Contents

- [Code of Conduct](#code-of-conduct)
- [How Can I Contribute?](#how-can-i-contribute)
- [Development Setup](#development-setup)
- [Coding Standards](#coding-standards)
- [Commit Messages](#commit-messages)
- [Pull Request Process](#pull-request-process)

## 🤝 Code of Conduct

By participating in this project, you are expected to uphold our Code of Conduct:

- Be respectful and inclusive
- Welcome newcomers and encourage diverse perspectives
- Focus on what is best for the community
- Show empathy towards other community members

## 🛠️ How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check existing issues to avoid duplicates. When creating a bug report, include:

- **Clear title and description**
- **Steps to reproduce** the issue
- **Expected behavior** vs actual behavior
- **Screenshots** if applicable
- **Environment details** (OS, PHP version, Laravel version)

### Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues. When creating an enhancement suggestion, include:

- **Clear title and description**
- **Use case** - why is this enhancement useful?
- **Possible implementation** - if you have ideas
- **Mockups or examples** - if applicable

### Your First Code Contribution

Unsure where to start? Look for issues labeled:

- `good first issue` - Simple issues for beginners
- `help wanted` - Issues that need attention
- `documentation` - Documentation improvements

## 💻 Development Setup

1. **Fork the repository**
   ```bash
   # Click the "Fork" button on GitHub
   ```

2. **Clone your fork**
   ```bash
   git clone https://github.com/your-username/-NGO-UMUS.git
   cd -NGO-UMUS
   ```

3. **Set up upstream remote**
   ```bash
   git remote add upstream https://github.com/buildwithnahin/-NGO-UMUS.git
   ```

4. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

5. **Set up environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

6. **Create a feature branch**
   ```bash
   git checkout -b feature/your-feature-name
   ```

## 📝 Coding Standards

### PHP/Laravel Standards

- Follow [PSR-12](https://www.php-fig.org/psr/psr-12/) coding standards
- Use Laravel best practices and conventions
- Write descriptive variable and function names
- Add comments for complex logic
- Keep functions small and focused

### Frontend Standards

- Use Bootstrap 5 utility classes when possible
- Follow existing CSS naming conventions
- Keep JavaScript modular and well-commented
- Ensure responsive design (mobile-first)
- Test on multiple browsers

### Database

- Use meaningful migration and table names
- Add foreign key constraints
- Include rollback methods in migrations
- Use database seeders for sample data

## 📝 Commit Messages

Follow the [Conventional Commits](https://www.conventionalcommits.org/) specification:

```
<type>(<scope>): <subject>

<body>

<footer>
```

### Types

- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation only
- `style`: Code style changes (formatting, etc.)
- `refactor`: Code refactoring
- `perf`: Performance improvements
- `test`: Adding tests
- `chore`: Maintenance tasks

### Examples

```bash
feat(admin): add volunteer registration management

- Add CRUD operations for volunteer registrations
- Include filters for registration status
- Add export functionality

Closes #123
```

```bash
fix(frontend): resolve slider image overflow on mobile

The hero slider images were not properly contained on mobile devices,
causing horizontal scroll. Added proper CSS constraints.

Fixes #456
```

## 🔄 Pull Request Process

1. **Update your fork**
   ```bash
   git fetch upstream
   git rebase upstream/main
   ```

2. **Test your changes**
   ```bash
   # Run tests
   php artisan test
   
   # Check code style
   ./vendor/bin/phpcs
   ```

3. **Commit your changes**
   ```bash
   git add .
   git commit -m "feat: your feature description"
   ```

4. **Push to your fork**
   ```bash
   git push origin feature/your-feature-name
   ```

5. **Create Pull Request**
   - Go to the original repository on GitHub
   - Click "New Pull Request"
   - Select your fork and branch
   - Fill in the PR template with details

### PR Requirements

- [ ] Code follows the project's coding standards
- [ ] Self-review completed
- [ ] Comments added for complex code
- [ ] Documentation updated (if needed)
- [ ] No new warnings or errors
- [ ] Tests added/updated (if applicable)
- [ ] All tests passing
- [ ] Responsive design verified

### PR Review Process

1. Maintainers will review your PR
2. Address any requested changes
3. Once approved, your PR will be merged
4. Your contribution will be acknowledged!

## 🐛 Debugging Tips

- Enable debug mode: `APP_DEBUG=true` in `.env`
- Check Laravel logs: `storage/logs/laravel.log`
- Use `dd()` and `dump()` for debugging
- Browser console for frontend issues
- Database queries: Enable query logging

## 📧 Questions?

Feel free to:
- Open an issue with the `question` label
- Email: nahin.codebug@gmail.com

## 🙏 Thank You!

Your contributions make this project better for everyone. Thank you for taking the time to contribute!

---

Happy Coding! 🚀
